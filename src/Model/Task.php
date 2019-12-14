<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected static function boot(){
        parent::boot();
        self::created(function($task){ if($task->assign && !$task->parent) $task->Partners()->sync(GroupPartner::where('group',$task->assign)->pluck('partner')); });
    }

    public function Partners(){ return $this->belongsToMany(Partner::class,'partner_tasks','task','partner')->withTimestamps(); }
    public function Main(){ return $this->belongsTo(Task::class,'parent','id'); }
    public function Tasks(){ return $this->hasMany(Task::class,'parent','id'); }
    public function Progress(){ return $this->hasMany(PartnerTask::class,'task','id'); }

    public function scopeRecentlyCompleted($Q){ return $Q->whereHas('Progress',function($Q){ $Q->completed()->recent(); }); }
}
