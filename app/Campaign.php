<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = ['title', 'link', 'entry_id', 'state_id',
  ];

  public function entries()
  {
    return $this->belongsTo('App\Entry');
  }

  public function state()
  {
    return $this->belongsTo('App\State');
  }
}
