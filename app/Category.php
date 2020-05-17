<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function entries()
    {
      return $this->belongsToMany(Entry::class);
    }
}
