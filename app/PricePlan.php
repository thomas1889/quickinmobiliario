<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
  public function users(){
    return $this->belongsToMany(User::class, 'users_has_plans');
  }
}
