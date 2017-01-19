<?php

use Illuminate\Database\Seeder;
use QuickInmobiliario\Punctuation;

class PunctuationTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Punctuation::truncate();
        factory(Punctuation::class, 10)->create();
    }

}
