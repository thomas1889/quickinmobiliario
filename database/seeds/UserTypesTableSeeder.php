<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\UserType;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      UserType::truncate();
      
      DB::table('user_types')->insert([
        ['name' => 'Persona Natural'],
        ['name' => 'Persona Jurídica'],
        ['name' => 'Acelerador'],
      ]);
    }
}
