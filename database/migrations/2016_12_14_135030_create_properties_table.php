<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('properties', function(Blueprint $table){
        $table->increments('id');
        $table->string('name', 75);
        $table->tinyInteger('estado');
        $table->string('phone', 45);
        $table->string('address', 75);
        $table->text('description');
        $table->string('antiquity', 45);
        $table->string('property_code');
        $table->string('zone', 45);
        $table->string('city', 45);
        $table->string('state', 45);
        $table->string('neighborhood', 45);
        $table->decimal('built_area', 10, 2);
        $table->decimal('full_area', 10, 2);
        $table->tinyInteger('rooms');
        $table->tinyInteger('stratum');
        $table->tinyInteger('floors');
        $table->decimal('price', 15, 2);
        $table->integer('project_id')->default(0);
        $table->integer('property_type_id');
        $table->integer('use_type_id');
        $table->integer('business_type_id');
        $table->integer('commission_id');
        $table->timestamps();
      });

      DB::statement('ALTER TABLE properties ADD coordinates POINT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('properties');
    }
}
