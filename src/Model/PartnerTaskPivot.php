<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PartnerTaskPivot extends Pivot
{

    protected $table = 'partner_tasks';
    protected static function boot(){
        parent::boot();
        self::created(function($model){
            if($model->category) return;
            $model->category = $model->Task->category;
            $model->save();
        });
    }
    public function Task(){ return $this->belongsTo(Task::class,'task','id'); }
    public function Partner(){ return $this->belongsTo(Partner::class,'partner','id'); }
}