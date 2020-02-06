<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Arr;

class GroupTask extends Pivot
{
    protected $table = 'group_tasks';
    protected static function boot(){
        parent::boot();
        self::created(function($model){
            $task = $model->task;
            $partner_group = Arr::get(TaskPartnerGroup::where('task_group',$model->group)->first(),'partner_group');
            if(!$partner_group) return;
            $partners = GroupPartner::where('group',$partner_group)->pluck('partner')->toArray();
            if(!$partners || empty($partners)) return;
            $Task = Task::find($task); if(!$Task) return;
            $Task->Partners()->syncWithoutDetaching(array_fill_keys($partners,['category' => $Task->category]));
        });
    }
}
