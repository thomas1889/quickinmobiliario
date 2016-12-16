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

  public function show(){
  }
}
