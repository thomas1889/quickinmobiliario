<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use QuickInmobiliario\Http\Requests\StoreProject;
use QuickInmobiliario\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller{
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
    return view('projects.create');
  }
  public function store(StoreProject $request){

    $project = new Project;
    $project->name = $request->get('name');
    $project->address = $request->get('address');
    $project->phone = $request->get('phone');
    $project->description = $request->get('description');
    $project->built_area = $request->get('built_area');
    $project->full_area = $request->get('full_area');
    $project->zone = $request->get('zone');
    $project->city = $request->get('city');
    $project->neighborhood = $request->get('neighborhood');
    $project->save();
    
    return redirect()->route('projects_path');
  }
  public function destroy($id){
    $project = Project::findOrFail($id);
    $project->delete();

    return redirect()->route('projects_path');
  }
}
