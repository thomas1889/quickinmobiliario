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
        $table->timestamp('date_time');
        $table->string('place', 140);
        $table->string('state', 45);
        $table->tinyInteger('pending_invitations');
        $table->integer('scheluder_id'); // Usuario quien crea la cita
        $table->integer('user_id'); // Usuario quien acepta la cita
        $table->integer('mediator_id')->default(0); // Usuario acelerador, si lo hay
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
      Schema::dropIfExists('appointments');
    }
}
