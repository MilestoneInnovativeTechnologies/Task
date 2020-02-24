<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    public function Partners(){ return $this->belongsToMany(Partner::class,'partner_tasks','task','partner')->using(PartnerTaskPivot::class)->active()->withTimestamps(); }
    public function Main(){ return $this->belongsTo(Task::class,'parent','id'); }
    public function Tasks(){ return $this->hasMany(Task::class,'parent','id'); }
    public function Progress(){ return $this->hasMany(PartnerTask::class,'task','id'); }
	public function CategoryTask(){return $this->belongsTo(Category::class,'category','id'); }
	public function CategoryProgress(){return $this->belongsTo(Category::class,'category','id'); }
    public function Groups(){ return $this->belongsToMany(TaskGroupMaster::class,'group_tasks','task','group')->using(GroupTask::class)->withTimestamps(); }

    public function scopeActive($query){ return $query->where('status','!=','Inactive'); }
    public function scopeInactive($query){ return $query->where('status','=','Inactive'); }
}
