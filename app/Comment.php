<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Comment extends Model {
  protected $fillable = [
    'content'
  ];

  public function post() {
    return $this->belongsTo('App\Post');
  }

  public function user() {
    return $this->belongsTo('App\User');
  }
}
