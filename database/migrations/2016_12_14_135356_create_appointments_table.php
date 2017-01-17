<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('appointments', function(Blueprint $table){
        $table->increments('id');
        $table->date('date')->nullable();
        $table->time('time')->nullable();
        $table->string('place', 140)->default("")->nullable();
        $table->string('state', 45)->default("")->nullable();
        $table->tinyInteger('pending_invitations')->default(0)->nullable();
        $table->integer('scheluder_id')->default(0)->nullable(); // Usuario quien crea la cita
        $table->integer('user_id')->default(0)->nullable(); // Usuario quien acepta la cita
        $table->integer('mediator_id')->default(0)->nullable(); // Usuario acelerador, si lo hay
        $table->integer('property_id')->default(0)->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('appointments');
    }
}
