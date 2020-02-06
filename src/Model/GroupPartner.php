<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Arr;

class GroupPartner extends Pivot
{
    protected $table = 'group_partners';
    protected static function boot(){
        parent::boot();
        self::created(function($model){
            $partner = $model->partner;
            $task_group = Arr::get(TaskPartnerGroup::where('partner_group',$model->group)->first(),'task_group');
            if(!$task_group) return;
            $tasks = GroupTask::where('group',$task_group)->pluck('task')->toArray();
            if(!$tasks || empty($tasks)) return;
            $attachData = Task::find($tasks)->pluck('category','id')->map(function($category){ return compact('category'); })->toArray();
            Partner::find($partner)->Tasks()->syncWithoutDetaching($attachData);
        });
    }
}
