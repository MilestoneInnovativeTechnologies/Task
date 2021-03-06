<?php
Route::group([
    'prefix' => 'eui',
    'middleware' => ['web']
],function(){
    Route::get('/{page?}',function(){ return view(\Illuminate\Support\Facades\Auth::check() ? 'task::eui_main' : 'task::eui_login'); })->name('eui');
    Route::post('/',function(){ return redirect()->route('eui',['success' => \Illuminate\Support\Facades\Auth::attempt(request()->only('email','password'))]); });
    Route::post('tasks',function(){ return \Milestone\Task\Model\PartnerTask::with(['CategoryProgress','Task','Partner'])->get(); });
    Route::post('update',function(){ return \Milestone\Task\Model\PartnerTask::where(['partner' => \Illuminate\Support\Facades\Auth::id(),'id' => request('id')])->update([request('action') => request('data')]); })->name('task_update');
    Route::post('progress',function(){
        if(!request('id')) return redirect()->back();
        $ptsk = \Milestone\Task\Model\PartnerTask::find(request('id')); if(!$ptsk || $ptsk->partner != \Illuminate\Support\Facades\Auth::id()) return redirect()->back();
        foreach (['attachment1','attachment2','attachment3'] as $aName)
            $ptsk->$aName = request()->hasFile($aName)
                ? \Milestone\Appframe\Helper\Helper::Help('StoreFile', request($aName), ['form' => '800904','field' => $aName])->id
                : (request()->has($aName) ? $ptsk->$aName : null);
        foreach (['progress','remarks'] as $key) $ptsk->$key = request($key);
        $ptsk->save(); return redirect()->back();
    })->name('progress');
    Route::post('updates',function(){ return \Milestone\Task\Model\PartnerTask::with(['CategoryProgress','Task','Partner'])->where('updated_at','>',request('time',0))->get(); });
});