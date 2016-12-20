<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use QuickInmobiliario\Property;
use QuickInmobiliario\Project;
use QuickInmobiliario\PropertyType;
use QuickInmobiliario\UseType;
use QuickInmobiliario\BusinessType;

class PropertyController extends Controller {

    public function index() {
        $properties = Property::all();

        return view('properties.index', ['properties' => $properties]);
    }

    public function show($id) {
        $property = Property::find($id);

        return view('properties.show', ['property' => $property]);
    }

    public function create() {
        $projects = Project::all(); //Por ahora todos, pero se corregirá a los proyectos asociados al usuario juridico
        $property_types = PropertyType::all();
        $use_types = UseType::all();
        $business_types = BusinessType::all();

        return view('properties.create', [
            'projects' => $projects,
            'property_types' => $property_types,
            'use_types' => $use_types,
            'business_types' => $business_types
        ]);
    }

    public function store(Request $request) {
        dd($request);
    }

    public function edit() {

    }

}
