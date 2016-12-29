<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use QuickInmobiliario\Http\Requests\StoreProject;
use QuickInmobiliario\Project;
use QuickInmobiliario\PropertyType;
use QuickInmobiliario\UseType;
use QuickInmobiliario\BusinessType;

class ProjectController extends Controller{

  private function get_use_types(){
    return UseType::all();
  }

  private function get_business_types(){
    return BusinessType::all();
  }

  private function get_property_types(){
    return PropertyType::all();
  }

  public function index()
  {
    $projects = Project::all();
    return view('projects.index', ['projects' => $projects]);
  }
  public function show($id)
  {
    $project = Project::findOrFail($id);
    return view('projects.show',['project'=> $project]);
  }
  public function create()
  {
    return view('projects.create', [
      'use_types'=> $this->get_use_types(),
      'business_types' => $this->get_business_types(),
      'property_types' => $this->get_property_types()
    ]);
  }
  public function store(StoreProject $request){

    $project = new Project;
    $this->setProject($project, $request);
    $project->project_code='QP-'.time();
    $project->save();

    return redirect()->route('projects_show_path',$project->id);
  }
  public function destroy($id){
    $project = Project::findOrFail($id);
    $project->delete();

    return redirect()->route('projects_path');
  }

  public function edit($id){
  
    return view('projects_edit_path',[
      'project' => $this->$project->getProject(),
      'use_types' => $this->get_use_types(),
      'business_types' => $this->get_business_types()
    ]);
  }

  public function update($id, StoreProject $request){
   $project = $this->getProject($id);
   $this->setProject($project, $request);
   $project->save();

   return redirect()->route('projects_path');
 }

  private function getProject($id){
    return Project::findOrFail($id);
  }

  private function setProject(Project $project, StoreProject $request){
    $project->name = $request->get('name');
    $project->address = $request->get('address');
    $project->phone = $request->get('phone');
    $project->description = $request->get('description');
    $project->built_area = $request->get('built_area');
    $project->full_area = $request->get('full_area');
    $project->unit_quantity = $request->get('unit_quantity');
    $project->unit_quantity = $request->get('left_units');
    $project->zone = $request->get('zone');
    $project->city = $request->get('city');
    $project->neighborhood = $request->get('neighborhood');
<<<<<<< HEAD
    $project->use_type_id = $request->get('use_type_id');
    $project->business_type_id = $request->get('business_type_id');
=======
    $project->save();

    return redirect()->route('projects_path');
>>>>>>> origin/master
  }

}
