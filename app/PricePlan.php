<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'price', 'description'];

  public function users(){
    return $this->belongsToMany(User::class, 'users_has_plans');
  }
}
