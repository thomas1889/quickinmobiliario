<?php

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('features')->insert([
        ['name' => 'Aire Acondicionado'],
        ['name' => 'Alarma'],
        ['name' => 'Amoblado'],
        ['name' => 'Balcón'],
        ['name' => 'Chimenea'],
        ['name' => 'Cocina Integral'],
        ['name' => 'Cuarto de Servicio'],
        ['name' => 'Depósito'],
        ['name' => 'Sauna/Turco/Jacuzzi'],
        ['name' => 'Ascensor'],
        ['name' => 'Cancha de Tennis'],
        ['name' => 'Gimnasio'],
        ['name' => 'Piscina'],
        ['name' => 'Zonas Verdes'],
        ['name' => 'Colegios/Universidades'],
        ['name' => 'Zona Comercial'],
        ['name' => 'Zona Industrial'],
        ['name' => 'Zona Residencial'],
      ]);
    }
}
