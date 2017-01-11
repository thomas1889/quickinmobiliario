<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\Property;
use QuickInmobiliario\Commission;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Property::truncate();
      Commission::truncate();

      factory(QuickInmobiliario\Commission::class, 100)->create()->each(function($commission){
        $property = factory(Property::class)->make();
        $commission->property()->save($property);
      });
    }
}
