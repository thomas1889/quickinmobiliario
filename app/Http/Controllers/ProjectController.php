<?php

namespace QuickInmobiliario\Http\Controllers;

use QuickInmobiliario\Project;

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
    // return view('projects.create');
  }
  public function destroy($id){
    $project = Project::findOrFail($id);
    $project->delete();
    
    return redirect()->route('projects_path');
  }
}
