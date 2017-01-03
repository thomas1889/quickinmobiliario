<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{

  protected $fillable = ['price'];

  public function property(){
    return $this->hasOne(Property::class);
  }
}
