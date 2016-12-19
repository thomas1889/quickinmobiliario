<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use QuickInmobiliario\Property;

class PropertyController extends Controller
{
  public function index(){
    $properties = Property::all();

    return view('properties.index', ['properties' => $properties]);
  }

  public function show($id){
    $property = Property::find($id);

    return view('properties.show', ['property' => $property]);
  }

  public function create(){
    return view('properties.create');
  }

  public function store(Request $request){
    dd($resquest);
  }

  public function edit(){

  }
}
