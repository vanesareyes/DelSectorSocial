<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Campaign;
use App\Source;
use App\Category;

class Entry extends Model
{
  protected $fillable = ['language_id','title', 'definition', 'recomendedEntry1', 'recomendedEntry2', 'howToUse'];
  public $table = "entries";
  
  public function campaigns()
  {
    return $this->belongsToMany(Campaign::class);
  }
  
  public function sources()
  {
    return $this->hasMany(Source::class);
  }

  public function categories()
  {
    return $this->belongsToMany(Category::class);
    return $this->belongsToMany(Entry::class);
  }
  
  
  public $guarded = [];
}
