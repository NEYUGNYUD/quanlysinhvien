<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';

    protected $fillable = ['name', 'description'];

    public function users() {
        return $this->hasMany('App\User', 'level_id', 'id');
    }

}
