<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\PropertyImage;
use QuickInmobiliario\Property;

class PropertyImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      PropertyImage::truncate();

      Property::all()->each(function($property){
        for ($i=0; $i < 10 ; $i++) {
          $images = factory(PropertyImage::class)->make();
          $property->property_images()->save($images);
        }
      });
    }
}
