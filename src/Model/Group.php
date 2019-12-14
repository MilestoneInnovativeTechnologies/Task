<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    public function Partners(){ return $this->belongsToMany(Partner::class,'group_partners','group','partner')->withTimestamps(); }
}
