<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
  public function property(){
    return $this->belongsTo(Property::class);
  }
}
