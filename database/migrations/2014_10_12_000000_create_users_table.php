<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 150)->default("")->nullable();
            $table->string('last_name', 150)->default("")->nullable();
            $table->string('business_name', 150)->default("")->nullable();
            $table->string('cell_phone', 45)->default("")->nullable();
            $table->string('address')->default("")->nullable();
            $table->string('document_type', 45)->default("")->nullable();
            $table->string('document', 25)->default("")->nullable();
            $table->integer('age')->default(0)->nullable();
            $table->string('gender', 10)->default("")->nullable();
            $table->string('email', 75)->default("")->nullable();
            $table->string('username', 45)->default("")->nullable();
            $table->string('profession', 75)->default("")->nullable();
            $table->string('city', 45)->default("")->nullable();
            $table->string('password')->default("")->nullable();
            $table->string('image_perfil')->default("")->nullable();
            $table->integer('user_type_id')->default(0)->nullable();
            $table->string('newsletter')->default("")->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }

}
