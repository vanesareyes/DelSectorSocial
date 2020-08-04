<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
  protected $fillable = [
    'title', 'link', 'entry_id',
];
  public function entry()
  {
    return $this->belongsTo('App\Entry');
  }
}
