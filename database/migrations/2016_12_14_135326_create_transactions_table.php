<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('transactions', function(Blueprint $table){
        $table->increments('id');
        $table->string('type', 45);
        $table->integer('property_id');
        $table->integer('buyer_id');
        $table->integer('seller_id');
        $table->integer('accelerator_id');
        $table->string('state', 45);
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
      Schema::dropIfExists('transactions');
    }
}
