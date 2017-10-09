<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['name', 'slug'];

    public function teachers() {
        return $this->hasMany('App\Teacher', 'role_id', 'id');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
