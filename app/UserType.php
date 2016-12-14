<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
  public function user(){
    return $this->hasOne(User::class);
  }
}
