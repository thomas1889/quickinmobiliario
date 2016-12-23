<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use QuickInmobiliario\Project;
use QuickInmobiliario\Property;
use QuickInmobiliario\UseType;
use QuickInmobiliario\BusinessType;

class ProjectController extends Controller
{
  /**
  *@return Properties
  **/
  private function get_properties(){
    return Property::all();
  }
  /**
  *@return UseType
  **/
  private function get_use_types(){
    return UseType::all();
  }
  private function get_business_types(){
    return businessType::all();
  }
  /**
  *@return businessType
  **/
  public function index()
  {
    $projects = \QuickInmobiliario\Project::all();
    return view('projects.index', ['projects' => $projects]);
  }

  public function create()
  {
    return view('projects.create',[
      'properties' => $this->get_properties(),
      'use_types' => $this->get_use_types(),
      'business_types' => $this->get_business_types()
    ]);
  }
  public function store(Request $request)
  {
    //validation for project's form
    /*
    $validator = Validator::make($request->all(),[
      'name' => 'required',
      'address' => 'required',
      'phone' => 'required',
      'description' => 'required',
      'built_area' => 'required',
      'full_area' => 'required',
      'zone' => 'required',
      'city' => 'required',
      'neighborhood' => 'required',
      'use_type_id' => 'required',
      'commission' => 'required',
      'business_type_id' => 'required'
    ]);
    if($validator->fails()){
      return redirect()->route('
      projects_create_path')->withInput()->
      withErrors($validator);
    }
    */
    $project = new Project();
    $project->name = $request->get('name');
    $project->address = $request->get('address');
    $project->phone = $request->get('phone');
    $project->description = $request->get('description');
    $project->built_area = $request->get('built_area');
    $project->full_area = $request->get('full_area');
    $project->zone = $request->get('zone');
    $project->city = $request->get('city');
    $project->neighborhood = $request->get('neighborhood');
    $project->use_type_id = $request->get('use_type_id');
    $project->business_type_id = $request->get('business_type_id');
    /*
    $project->commission_id = $request->get('commission');
    $commission->save();
    $commission->properties()->save($Property);
    */
    return redirect()->route('projects_show_path',$project->id);
  }
  public function show($id)
  {
    $project = Project::findOrFail($id);
    return view('projects.show',['project'=> $project]);
  }

  public function edit($id)
  {
    //
  }
  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}
