<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePunctuationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('punctuations', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('punctuation')->default(0)->nullable();
            $table->string('comment', 150)->default("")->nullable();
            $table->integer('user_id')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('punctuations');
    }

}
