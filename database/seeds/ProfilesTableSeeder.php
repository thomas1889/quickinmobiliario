<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Profile::truncate();

      DB::table('profiles')->insert([
        ['profile' => 'Admin'],
        ['profile' => 'Usuario común']
      ]);
    }
}
