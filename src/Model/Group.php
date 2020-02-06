<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    public function Partners(){ return $this->belongsToMany(Partner::class,'group_partners','group','partner')->using(GroupPartner::class)->withTimestamps(); }
    public function TaskGroups(){ return $this->belongsToMany(TaskGroupMaster::class,'task_partner_group','partner_group','task_group')->using(TaskPartnerGroup::class)->withTimestamps(); }
}
