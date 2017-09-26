<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public function teachers() {
        return $this->hasMany('App\Teacher', 'role_id', 'id');
    }
}
