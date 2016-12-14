<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('projects', function(Blueprint $table){
        $table->increments('id');
        $table->string('name', 75);
        $table->string('address', 75);
        $table->string('phone', 45);
        $table->text('description');
        $table->decimal('built_area', 7, 2);
        $table->decimal('full_area', 7, 2);
        $table->string('zone', 45);
        $table->string('city', 45);
        $table->string('neighborhood', 45);
        $table->integer('use_type_id');
        $table->integer('bussiness_type_id');
        $table->timestamps();
      });
      DB::statement('ALTER TABLE projects ADD coordinates POINT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
