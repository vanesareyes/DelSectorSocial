<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name', 'flag', 'language_id', 
    ];

    public function recommendedterms(){
        return $this->hasMany('App\Recommendedterm');
    }

    public function language(){
        return $this->belongsTo('App\Language');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function entries()
    {
        return $this->belongsToMany('App\Entry');
    }
}
