<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class Punctuation extends Model
{
  protected $fillable = ['punctuation', 'comment', 'user_id'];
  
  public function user(){
    return $this->belongsTo(User::class);
  }
}
