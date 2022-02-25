<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("contacts")->insert([
            "adresse"=>"Rue du pon Moreti",
            "num"=>"+32 0468470077",
            "mail"=>"ghannou.0702@gmail.com"
        ]);
    }
}
