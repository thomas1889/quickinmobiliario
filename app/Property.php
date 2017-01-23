<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'phone', 'address', 'description', 'antiquity', 'state', 'zone', 'city', 'neighborhood', 'built_area', 'full_area', 'rooms',
    'stratum', 'parkings', 'bathrooms', 'floors', 'price', 'project_id', 'property_type_id', 'use_type_id', 'business_type_id', '360video'
  ];

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

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function features(){
    return $this->belongsToMany(Features::class, 'property_has_features');
  }
}
