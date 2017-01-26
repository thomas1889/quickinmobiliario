<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Messages extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
      Schema::create('messages', function(Blueprint $table) {
        $table->increments('id');
        $table->string('email', 45)->default("")->nullable();
        $table->string('message', 150)->default("")->nullable();
        $table->integer('user_id')->default(0)->nullable(); //Usuario que contacta (Loguiado)
        $table->integer('user_contacted_id')->default(0)->nullable();//Usuario contactado 
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
      Schema::dropIfExists('messages');
    }

}
