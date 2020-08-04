<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name',
    ];

    public function entries(){
        return $this->hasMany('App\Entry');
    }

    public function campaigns()
  {
    return $this->hasMany('App\Campaigns');
  }
}
