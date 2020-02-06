<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;

class TaskGroupMaster extends Model
{
    protected $table = 'task_group_masters';

    public function Tasks(){ return $this->belongsToMany(Task::class,'group_tasks','group','task')->using(GroupTask::class)->withTimestamps(); }
    public function PartnerGroups(){ return $this->belongsToMany(Group::class,'task_partner_group','task_group','partner_group')->using(TaskPartnerGroup::class)->withTimestamps(); }
}
