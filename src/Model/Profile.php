<?php

namespace Milestone\Task\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Profile extends Model
{
    protected $table = 'users';
    public function setPasswordAttribute($value){
        $this->attributes['password'] = \Hash::make($value);
    }

    protected static function boot()
    {
        parent::boot();
        self::addGlobalScope('own', function (Builder $builder) {
            $admin = Auth::user()->Groups->contains('name','task_administrator');
            if (!$admin) $builder->where('id', Auth::id());
        });

    }
}

