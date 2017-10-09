<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';

    protected $fillable = ['name', 'slug', 'faculty_code'];

    public function teachers() {
        return $this->hasMany('App\Teacher', 'faculty_id', 'id');
    }

    public function classes() {
        return $this->hasMany('App\Classes', 'faculty_id', 'id');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
