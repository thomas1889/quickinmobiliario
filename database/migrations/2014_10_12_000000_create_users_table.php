<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 150);
            $table->string('last_name', 150);
            $table->string('business_name', 150);
            $table->string('cell_phone', 45);
            $table->string('address');
            $table->string('document_type', 45);
            $table->integer('age');
            $table->string('gender', 10);
            $table->string('email', 75)->unique();
            $table->string('username', 45);
            $table->string('profession', 150);
            $table->string('city', 45);
            $table->string('password');
            $table->integer('user_type_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
