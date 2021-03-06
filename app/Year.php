<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = 'years';
    public $timestamps = false;
    protected $fillable = ['year'];

    public function students() {
        return $this->hasMany('App\Student', 'year_start', 'id');
    }

    public function scoreExpression() {
        return $this->hasOne('App\ScoreExpression', 'year_id');
    }

    public function getRouteKeyName() {
        return 'year';
    }
}
