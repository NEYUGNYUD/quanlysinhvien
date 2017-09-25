<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreExpression extends Model
{
    protected $table = 'score_expressions';

    public function year() {
        return $this->belongsTo('App\Year', 'year_id', 'id');
    }
}
