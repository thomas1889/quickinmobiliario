<?php

namespace QuickInmobiliario\Http\Controllers;

use QuickInmobiliario\Http\Requests\StoreProperty;
use QuickInmobiliario\Property;
use QuickInmobiliario\PropertyImage;
use QuickInmobiliario\Project;
use QuickInmobiliario\Commission;
use QuickInmobiliario\PropertyType;
use QuickInmobiliario\UseType;
use QuickInmobiliario\BusinessType;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{

  /**
  * @return Response
  */
  public function index(){
    return view('properties.index', ['properties' => Property::all()]);
  }

  /**
  * @param Property $id
  * @return Response
  */
  public function show($id){
    return view('properties.show', ['property' => $this->getProperty($id)]);
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
    $property = new Property;
    $this->setProperty($property, $request);
    $property->property_code = 'qi-'.time();

    $commission = new Commission();
    $commission->price = $request->get('commission');
    $commission->save();
    $commission->property()->save($property);
    if(!empty($request->get('images'))){
      foreach ($request->get('images') as $value) {
        $images = new PropertyImage();
        $images->path = $value;
        $property->property_images()->save($images);
      }
    } else {
      $property->save();
    }

    return redirect()->route('property_show_path', $property->id);
  }

  /**
  * @param Property $id
  */
  public function edit($id){
    return view('properties.edit', [
      'property' => $this->getProperty($id),
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
    $property = $this->getProperty($id);
    $this->setProperty($property, $request);
    $property->save();

    $commission = Commission::findOrFail($request->get('commission_id'));
    $commission->price = $request->get('commission');
    $commission->save();

    return redirect()->route('properties_path');
  }

  public function destroy($id){
    $property = $this->getProperty($id);
    $property->commission()->delete();
    $property->property_images()->each(function($image){
      Storage::delete('public/'.$image->path);
    });
    $property->property_images()->delete();
    $property->delete();

    return redirect()->route('properties_path');
  }

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
  * @param Integer $id
  * @return Property
  */
  private function getProperty($id){
    return Property::findOrFail($id);
  }

  /**
  * @param Property $property
  * @param StoreProperty $request
  */
  private function setProperty(Property $property, StoreProperty $request){
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
  }
}
