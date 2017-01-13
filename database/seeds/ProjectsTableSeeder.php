<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Project::truncate();
      factory(Project::class, 30)->create();
    }
}
