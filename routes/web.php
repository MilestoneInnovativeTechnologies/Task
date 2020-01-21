<?php
Route::group([
    'prefix' => 'reseller',
    'middleware' => ['web']
],function(){
    Route::get('/',function(){ return view(\Illuminate\Support\Facades\Auth::check() ? 'task::reseller_index' : 'task::reseller_login'); })->name('reseller');
    Route::post('/',function(){ return redirect()->route('reseller',['success' => \Illuminate\Support\Facades\Auth::attempt(request()->only('email','password'))]); });
    Route::post('update',function(){ return \Milestone\Task\Model\PartnerTask::where(['partner' => \Illuminate\Support\Facades\Auth::id(),'id' => request('id')])->update([request('action') => request('data')]); })->name('task_update');
});