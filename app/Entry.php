<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
  protected $fillable = ['language_id', 'title', 'definition', 'recomendation', 'state_id'
  ];
  public $table = "entries";

  public function language(){
    return $this->belongsTo('App\Language');
  }
  
  public function state(){
    return $this->belongsTo('App\State');
  }
  
  public function users()
  {
    return $this->belongsToMany('App\User')->withPivot('isAuthor');
  }

  public function countries()
  {
    return $this->belongsToMany('App\Country');
  }
  
  public function sources()
  {
    return $this->hasMany('App\Source');
  }

  public function categories()
  {
    return $this->belongsToMany('App\Category');
  }
  
  public function recommendedterms(){
    return $this->hasMany('App\Recommendedterm');
  }
  
  public $guarded = [];
}
