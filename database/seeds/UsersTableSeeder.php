<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();
      factory(QuickInmobiliario\User::class, 10)->create();
    }
}
