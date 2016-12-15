<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\PropertyType;

class PropertyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      PropertyType::truncate();

      DB::table('property_types')->insert([
        ['name' => 'Apartamento'],
        ['name' => 'Casa'],
        ['name' => 'Finca'],
        ['name' => 'Bodega'],
        ['name' => 'Lote'],
      ]);
    }
}
