<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\UseType;

class UseTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      UseType::truncate();

      DB::table('use_types')->insert([
        ['name' => 'Residencial'],
        ['name' => 'Comercial'],
      ]);
    }
}
