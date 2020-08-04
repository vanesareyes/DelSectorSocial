<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendedterm extends Model
{
    protected $fillable = [
        'name', 'entry_id', 'country_id',
    ];

    public function entry(){
        return $this->belongsTo('App\Entry');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }
}
