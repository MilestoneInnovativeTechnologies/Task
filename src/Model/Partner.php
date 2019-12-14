<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'users';

    protected static function boot(){
        parent::boot();
        static::addGlobalScope('partners', function (Builder $builder) { $builder->whereHas('FrameGroups',function($Q){ return $Q->where('name','partners'); }); });
        static::created(function($Partner){ $Partner->FrameGroups()->attach(\Milestone\Appframe\Model\Group::where('name','partners')->first()->id); });
    }

    public function FrameGroups(){ return $this->belongsToMany(\Milestone\Appframe\Model\Group::class,'__group_users','user','group')->withTimestamps(); }
    public function setPasswordAttribute($value){ $this->attributes['password'] = \Hash::make($value); }

    public function Groups(){ return $this->belongsToMany(Group::class,'group_partners','partner','group')->withTimestamps(); }
    public function Tasks(){ return $this->belongsToMany(Task::class,'partner_tasks','partner','task')->withTimestamps(); }
    public function Progress(){ return $this->hasMany(PartnerTask::class,'partner','id'); }
}
