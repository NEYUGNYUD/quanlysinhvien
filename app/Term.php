<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table = 'term';

    public function subjects() {
        return $this->hasMany('App\Subject', 'term_id', 'id');
    }
}
