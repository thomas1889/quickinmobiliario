<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use QuickInmobiliario\Property;
use QuickInmobiliario\Commission;

class PropertyTest extends TestCase
{
  use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_property_can_be_saved(){
      factory(Commission::class, 10)->create()->each(function($commission){
        $property = factory(Property::class)->make();
        $commission->property()->save($property);
      });

      $properties = Property::all();

      $this->assertEquals(20, $properties->count());
    }

    public function test_property_was_correctly_saved(){
      factory(Commission::class, 10)->create()->each(function($commission){
        $property = factory(Property::class)->make();
        $commission->property()->save($property);
      });

      $property = Property::all();

      dd($property);
    }
}
