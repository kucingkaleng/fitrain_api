<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
  protected $guarded = ['id'];

  public function category () {
    return $this->belongsTo(Category::class);
  }

  public function sub_category () {
    return $this->belongsTo(SubCategory::class)->select(['id','name']);
  }
}
