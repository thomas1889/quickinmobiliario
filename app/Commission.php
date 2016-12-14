<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
  public function property(){
    return $this->hasOne(Property::class);
  }
}
