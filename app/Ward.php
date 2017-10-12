<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'wards';

    protected $fillable = ['name', 'slug', 'district_id'];

    public function district() {
        return $this->belongsTo('App\district', 'district_id', 'id');
    }
}
