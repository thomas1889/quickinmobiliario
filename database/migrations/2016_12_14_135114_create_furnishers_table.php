<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFurnishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('furnishers', function(Blueprint $table){
        $table->increments('id');
        $table->string('name', 75);
        $table->text('description');
        $table->integer('price');
        $table->decimal('area', 5, 2);
        $table->integer('property_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('furnishers');
    }
}
