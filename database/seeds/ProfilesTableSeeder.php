<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::truncate('profiles');
      DB::table('profiles')->insert([
        ['profile' => 'Admin'],
        ['profile' => 'Usuario común']
      ]);
    }
}
