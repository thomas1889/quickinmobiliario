<?php

namespace QuickInmobiliario\Http\Controllers;

use QuickInmobiliario\Http\Requests\StoreProperty;
use QuickInmobiliario\Property;
use QuickInmobiliario\Project;
use QuickInmobiliario\Commission;
use QuickInmobiliario\PropertyType;
use QuickInmobiliario\UseType;
use QuickInmobiliario\BusinessType;

class PropertyController extends Controller
{

  /**
  * @return Project
  */
  private function get_projects(){
    return Project::all();//Por ahora todos, pero se corregirá a los proyectos asociados al usuario juridico
  }

  /**
  * @return PropertyType
  */
  private function get_property_types(){
    return PropertyType::all();
  }

  /**
  * @return UseType
  */
  private function get_use_types(){
    return UseType::all();
  }

  /**
  * @return BusinessType
  */
  private function get_business_types(){
    return BusinessType::all();
  }

  /**
  * @return Response
  */
  public function index(){
    $properties = Property::all();

    return view('properties.index', ['properties' => $properties]);
  }

  /**
  * @param Property $id
  * @return Response
  */
  public function show($id){
    $property = Property::findOrFail($id);

    return view('properties.show', ['property' => $property]);
  }

  /**
  * @return Response
  */
  public function create(){
    return view('properties.create', [
      'projects' => $this->get_projects(),
      'property_types' => $this->get_property_types(),
      'use_types' => $this->get_use_types(),
      'business_types' => $this->get_business_types()
    ]);
  }

  /**
  * Store a new property
  *
  * @param StoreProperty $request
  * @return Response
  */
  public function store(StoreProperty $request){
    $property = new Property();
    $property->name = $request->get('name');
    $property->phone = $request->get('phone');
    $property->address = $request->get('address');
    $property->antiquity = $request->get('antiquity');
    $property->state = $request->get('state');
    $property->zone = $request->get('zone');
    $property->city = $request->get('city');
    $property->neighborhood = $request->get('neighborhood');
    $property->built_area = $request->get('built_area');
    $property->full_area = $request->get('full_area');
    $property->rooms = $request->get('rooms');
    $property->parkings = $request->get('parkings');
    $property->bathrooms = $request->get('bathrooms');
    $property->stratum = $request->get('stratum');
    $property->floors = $request->get('floors');
    $property->price = $request->get('price');
    $property->project_id = $request->get('project_id');
    $property->property_type_id = $request->get('property_type_id');
    $property->use_type_id = $request->get('use_type_id');
    $property->business_type_id = $request->get('business_type_id');
    $property->description = $request->get('description');
    $property->property_code = 'qi-'.time();
    $commission = new Commission();
    $commission->price = $request->get('commission');
    $commission->save();
    $commission->property()->save($property);

    return redirect()->route('property_show_path', $property->id);
  }

  /**
  * @param Property $id
  */
  public function edit($id){
    $property = Property::findOrFail($id);

    return view('properties.edit', [
      'property' => $property,
      'projects' => $this->get_projects(),
      'property_types' => $this->get_property_types(),
      'use_types' => $this->get_use_types(),
      'business_types' => $this->get_business_types()
    ]);
  }

  /**
  * @param Property $id
  * @param StoreProperty $request
  * @return Response
  */
  public function update($id, StoreProperty $request){
    $property = Property::findOrFail($id);
    $property->name = $request->get('name');
    $property->phone = $request->get('phone');
    $property->address = $request->get('address');
    $property->antiquity = $request->get('antiquity');
    $property->state = $request->get('state');
    $property->zone = $request->get('zone');
    $property->city = $request->get('city');
    $property->neighborhood = $request->get('neighborhood');
    $property->built_area = $request->get('built_area');
    $property->full_area = $request->get('full_area');
    $property->rooms = $request->get('rooms');
    $property->parkings = $request->get('parkings');
    $property->bathrooms = $request->get('bathrooms');
    $property->stratum = $request->get('stratum');
    $property->floors = $request->get('floors');
    $property->price = $request->get('price');
    $property->project_id = $request->get('project_id');
    $property->property_type_id = $request->get('property_type_id');
    $property->use_type_id = $request->get('use_type_id');
    $property->business_type_id = $request->get('business_type_id');
    $property->description = $request->get('description');
    $property->save();

    $commission = Commission::findOrFail($request->get('commission_id'));
    $commission->price = $request->get('commission');
    $commission->save();

    return redirect()->route('properties_path');
  }
}
