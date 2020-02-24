<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TaskGroupPartner extends Pivot
{
    protected $table = 'task_group_partners';
    protected static function boot(){
        parent::boot();
        self::created(function($model){
            $partner = $model->partner; $group = $model->group; $syncData = Task::whereHas('Groups',function($Q)use($group){ $Q->where('group',$group); })->pluck('category','id')->mapWithKeys(function($category,$id){ return [$id => compact('category')]; })->toArray();
            Partner::find($partner)->Tasks()->syncWithoutDetaching($syncData);
        });
        self::deleting(function($model){
            $partner = $model->partner; $group = $model->group; $tasks = GroupTask::where('group',$group)->pluck('task')->toArray();
            PartnerTask::where('partner',$partner)->whereIn('task',$tasks)->delete();
        });
    }
}
