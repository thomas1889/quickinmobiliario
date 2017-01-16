<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\Punctuation;
use QuickInmobiliario\User;

class PunctuationTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Punctuation::truncate();
        User::all()->each(function ($users) {
            for ($i = 0; $i < 10; $i++) {

                $nameUsers = factory(Punctuation::class)->make();
                $users->punctuations()->save($nameUsers);
            }
        });
    }

}
