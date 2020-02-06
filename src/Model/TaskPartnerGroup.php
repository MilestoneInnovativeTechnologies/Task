<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TaskPartnerGroup extends Pivot
{
    protected $table = 'task_partner_group';
    protected static function boot(){
        parent::boot();
        self::created(function($model){
            $tasks = GroupTask::where('group',$model->task_group)->pluck('task')->toArray();
            $partners = GroupPartner::where('group',$model->partner_group)->pluck('partner')->toArray();
            if(!$partners || !$tasks || empty($partners) || empty($tasks)) return;
            Task::find($tasks)->each(function($Task) use ($partners){
                $syncData = array_fill_keys($partners,['category' => $Task->category]);
                $Task->Partners()->sync($syncData);
            });
        });
    }
}
