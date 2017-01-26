<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\Messages;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Messages::truncate();
       factory(Messages::class,10)->create();
    }
}
