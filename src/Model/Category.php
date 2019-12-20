<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
	public function TaskCategory(){return $this->hasMany(Task::class,'category','id');}
	public function TaskCategoryPartner(){return $this->hasMany(PartnerTask::class,'category','id');}
	
}
