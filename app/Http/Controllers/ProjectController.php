<?php

namespace QuickInmobiliario\Http\Controllers;

use QuickInmobiliario\Http\Requests\StoreProject;
use QuickInmobiliario\Project;
use QuickInmobiliario\ProjectImage;
use QuickInmobiliario\Property;
use QuickInmobiliario\PropertyType;
use QuickInmobiliario\UseType;
use QuickInmobiliario\BusinessType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProjectController extends Controller{

	public function index()
	{
		return view('projects.index', ['projects' => Project::paginate(10)]);
	}

	public function show($id){
		return view('projects.show', ['project' => $this->getProject($id)]);
	}
	/*
	public function create(){
		return view('projects.create', [
			'property_types' => $this->get_property_types(),
			'use_types' => $this->get_use_types(),
			'business_types' => $this->get_business_types(),
			'properties' => $this->get_Properties()
		]);
	}

	public function store(StoreProject $request){
		$project = new Project;
		$this->setProject($project, $request);
		$project->project_code='QP-'.time();

		if(is_array($request->get('images')) && !empty($request->get('images'))){
			foreach ($request->get('images') as $value) {
				$images = new ProjectImage(['path' => $value]);
				$project->project_images()->save($images);
			}
		}
		return redirect()->route('projects_show_path',$project->id);
	}

	public function edit($id){
		return view('projects.edit',[
			'project' => $this->$project->getProject($id),
			'property_types' => $this->get_property_types(),
			'use_types' => $this->get_use_types(),
			'business_types' => $this->get_business_types(),
			'properties' => $this->get_Properties()
		]);
	}

	public function update($id, StoreProject $request){
		$project = $this->getProject($id);
		$this->setProject($project, $request);
		$project->save();

		return redirect()->route('projects_edit_path', $project->id);
	}
*/
	public function destroy($id){
		$project = $this->getProject($id);
		// $project->project_images()->each(function($image){
		// 	Storage::delete('public/projects'.$image->path);
		// })
		// $project->project_images()->delete();
		$project->delete();

		return redirect()->route('projects_path');
	}


	public function search(Request $request){
		$projects = Project::select('id','name','city','zone','created_at');

		if($request->has('zone') && $request->get('zone') !=-1){
			$projects->WHERE('zone', 'LIKE','%'.$request->get('zone').'%');
		}
		if($request->has('city')){
			$projects->WHERE('city','LIKE','%'.$request->get('city').'%');
		}

		return view('projects.index',['projects'=>$projects->paginate(10)]);
	}

	private function get_Properties(){
		return Property::all();
	}

	private function get_property_types(){
		return PropertyType::all();
	}

	private function get_use_types(){
		return UseType::all();
	}

	private function get_business_types(){
		return BusinessType::all();
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
		$project->left_units = $request->get('left_units');
		$project->zone = $request->get('zone');
		$project->city = $request->get('city');
		$project->neighborhood = $request->get('neighborhood');
		$project->property_type_id = $request->get('property_type_id');
		$project->use_type_id = $request->get('use_type_id');
		$project->business_type_id = $request->get('business_type_id');
		$project->property_id = $request->get('property_id');
		$project->video360 = $request->get('video360');
	}

}
