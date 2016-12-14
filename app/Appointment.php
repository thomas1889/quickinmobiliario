<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
  public function user(){
    return $this->belongsTo(User::class);
  }
}
