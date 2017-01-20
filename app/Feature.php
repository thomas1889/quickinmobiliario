<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model {
  protected $fillable = ['name'];

  public function properties(){
    return $this->belongsToMany(Property::class, 'property_has_features');
  }
}
