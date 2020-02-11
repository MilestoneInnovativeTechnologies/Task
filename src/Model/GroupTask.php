<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class GroupTask extends Pivot
{
    protected $table = 'group_tasks';
    protected static function boot(){
        parent::boot();
        self::created(function($model){
            $task = $model->task; $group = $model->group; $partners = TaskGroupPartner::where('group',$group)->pluck('partner')->toArray();
            $Task = Task::find($task); $syncData = array_fill_keys($partners,['category' => $Task->category]);
            $Task->Partners()->syncWithoutDetaching($syncData);
        });
    }
}
