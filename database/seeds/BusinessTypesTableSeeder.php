<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\BusinessType;

class BusinessTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      BusinessType::truncate();

      DB::table('business_types')->insert([
        ['name' => 'Venta'],
        ['name' => 'Permuta'],
        ['name' => 'Remate'],
        ['name' => 'Subasta'],
      ]);
    }
}
