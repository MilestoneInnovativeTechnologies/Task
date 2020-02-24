<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Milestone\Appframe\Model\Model as ModelAlias;

class PartnerTask extends ModelAlias
{

    protected $table = 'partner_tasks';
    protected static function boot(){
        parent::boot();
        self::addGlobalScope('own',function(Builder $builder){
            $admin = Auth::user()->Groups->contains('name','task_administrators');
            if(!$admin) $builder->where('partner',Auth::id());
        });
        self::addGlobalScope('active',function(Builder $builder){
            $builder->whereHas('Task',function($Q){ $Q->active(); })->whereHas('Partner',function($Q){ $Q->active(); });
        });
        self::created(function($model){
            if($model->category) return;
            $model->category = $model->Task->category;
            $model->save();
        });
    }

    public $storage = [['disk' => 'completion_attachments','path' => 'attachments']];
    public $files = ['attachment1','attachment2','attachment3'];

    public function scopeNew($Q){ return $Q->where('progress','New'); }
    public function scopeCompleted($Q){ return $Q->where('progress','Completed'); }
    public function scopeDismissed($Q){ return $Q->where('progress','Dismissed'); }
    public function scopeReturned($Q){ return $Q->where('progress','Returned'); }
    public function scopeRecent($Q){ return $Q->latest('updated_at'); }
    public function scopeRecent24($Q){ return $Q->where('updated_at','>=',date('Y-m-d h:i:s',strtotime('-24 hours'))); }
    public function scopeRecent48($Q){ return $Q->where('updated_at','>=',date('Y-m-d h:i:s',strtotime('-48 hours'))); }

    public function Task(){ return $this->belongsTo(Task::class,'task','id'); }
    public function Partner(){ return $this->belongsTo(Partner::class,'partner','id'); }
	public function CategoryProgress(){return $this->belongsTo(Category::class,'category','id'); }

}