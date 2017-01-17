<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\ProjectImage;
use QuickInmobiliario\Project;
use Illuminate\Database\Eloquent\Model;

class ProjectImagesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {

    ProjectImage::truncate();

    Project::all()->each(function($project){
      for ($i=0; $i < 5 ; $i++) {
        $images = factory(ProjectImage::class)->make();
        $project->project_images()->save($images);
      }
    });
  }
}
