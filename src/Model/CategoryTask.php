<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryTask extends Model
{
    protected $table = 'categories';

    public function Tasks(){ return $this->hasMany(PartnerTask::class, 'category', 'id'); }
	public function Newtasks(){ return $this->hasMany(Task::class, 'category', 'id'); }
	

    public function scopeCounts($Q){
        return $Q->withCount(['Tasks as new_count' => function($Q){ return $Q->new(); },'Tasks as completed_count' => function($Q){ return $Q->completed(); }]);
    }
}
