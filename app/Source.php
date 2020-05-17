<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    public function entry()
  {
    return $this->belongsTo(Entry::class);
  }
}
