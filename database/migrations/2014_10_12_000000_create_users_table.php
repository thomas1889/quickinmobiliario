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
            $table->string('first_name', 150)->default("");
            $table->string('last_name', 150)->default("");
            $table->string('business_name', 150)->default("");
            $table->string('cell_phone', 45)->default("");
            $table->string('address')->default("");
            $table->string('document_type', 45)->default("");
            $table->string('document', 25)->default("");
            $table->integer('age')->default(0);
            $table->string('gender', 10)->default("");
            $table->string('email', 75)->default("");
            $table->string('username', 45)->default("");
            $table->string('profession', 75)->default("");
            $table->string('city', 45)->default("");
            $table->string('password')->default("");
            $table->string('image_perfil')->default("");
            $table->integer('user_type_id')->default(0);
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
