<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = ['title','description', 'link', 'entry_id'];

    public function entries()
  {
          return $this->belongsToMany(Entry::class);
  }
}
