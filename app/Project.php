<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable =[
    'name', 'phone', 'address', 'description', 'zone', 'city', 'neighborhood', 'built_area', 'full_area', 'unit_quantity', 'left_units', 'property_type_id', 'use_type_id', 'business_type_id', '360video', 'stratum', 'floors', 'parking'
  ];

  public function properties(){
    return $this->hasMany(Property::class);
  }

  public function project_images(){
    return $this->hasMany(ProjectImage::class);
  }

  public function property_type(){
    return $this->belongsTo(PropertyType::class);
  }

  public function use_type(){
    return $this->belongsTo(UseType::class);
  }

  public function business_type(){
    return $this->belongsTo(BusinessType::class);
  }
  public function features(){
    return $this->belongsToMany(Feature::class, 'project_has_features');
  }
}
