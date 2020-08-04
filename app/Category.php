<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  protected $fillable = [
    'name', 
  ];

  public function countries()
  {
    return $this->belongsToMany('App\Country');
  }

  public function entries()
  {
    return $this->belongsToMany('App\Entry');
  }
}
