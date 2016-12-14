<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  public function property_images(){
    return $this->hasMany(PropertyImage::class);
  }

  public function property_type(){
    return $this->belongsTo(PropertyType::class);
  }

  public function furnishers(){
    return $this->hasMany(Furnisher::class);
  }

  public function use_type(){
    return $this->belongsTo(UseType::class);
  }

  public function business_type(){
    return $this->belongsTo(BusinessType::class);
  }

  public function project(){
    return $this->belongsTo(Project::class);
  }

  public function commission(){
    return $this->belongsTo(Commission::class);
  }

  public function users(){
    return $this->belongsToMany(User::class, 'users_has_properties');
  }
}
