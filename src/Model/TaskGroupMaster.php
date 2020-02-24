<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;

class TaskGroupMaster extends Model
{
    protected $table = 'task_group_masters';

    public function Tasks(){ return $this->belongsToMany(Task::class,'group_tasks','group','task')->using(GroupTask::class)->withTimestamps(); }
    public function Partners(){ return $this->belongsToMany(Partner::class,'task_group_partners','group','partner')->using(TaskGroupPartner::class)->withTimestamps(); }
}
