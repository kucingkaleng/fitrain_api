<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
  protected $guarded = ['id'];

  public function category () {
    return $this->belongsTo(Category::class);
  }

  public function trainings () {
    return $this->hasMany(Training::class);
  }
}
