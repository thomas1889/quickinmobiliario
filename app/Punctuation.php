<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class Punctuation extends Model
{
  public function user(){
    return $this->belongsTo(User::class);
  }
}
