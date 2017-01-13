<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

  public function users(){
    return $this->hasMany(User::class);
  }
}
