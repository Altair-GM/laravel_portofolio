<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            [
                'img'=>'images/item-1.jpg',
                'title1'=>"templatemo is the best",
                'txt'=>'Please tell your friends about it. Templatemo is the best website to download free Bootstrap CSS templates.'
            ],
            [
                'img'=>'images/item-2.jpg',
                'title1'=>"templatemo is the best",
                'txt'=>'Please tell your friends about it. Templatemo is the best website to download free Bootstrap CSS templates.'
            ],
            [
                'img'=>'images/item-3.jpg',
                'title1'=>"templatemo is the best",
                'txt'=>'Please tell your friends about it. Templatemo is the best website to download free Bootstrap CSS templates.'
            ],
        ]);
        DB::table('works')->insert([
            [
                'img'=>'images/item-1.jpg',
                'title1'=>"templatemo is the best",
                'txt'=>'Please tell your friends about it. Templatemo is the best website to download free Bootstrap CSS templates.'
            ],
            [
                'img'=>'images/item-2.jpg',
                'title1'=>"templatemo is the best",
                'txt'=>'Please tell your friends about it. Templatemo is the best website to download free Bootstrap CSS templates.'
            ],
            [
                'img'=>'images/item-3.jpg',
                'title1'=>"templatemo is the best",
                'txt'=>'Please tell your friends about it. Templatemo is the best website to download free Bootstrap CSS templates.'
            ],
        ]);
        DB::table('works')->insert([
            [
                'img'=>'images/item-1.jpg',
                'title1'=>"templatemo is the best",
                'txt'=>'Please tell your friends about it. Templatemo is the best website to download free Bootstrap CSS templates.'
            ],
            [
                'img'=>'images/item-2.jpg',
                'title1'=>"templatemo is the best",
                'txt'=>'Please tell your friends about it. Templatemo is the best website to download free Bootstrap CSS templates.'
            ],
            [
                'img'=>'images/item-3.jpg',
                'title1'=>"templatemo is the best",
                'txt'=>'Please tell your friends about it. Templatemo is the best website to download free Bootstrap CSS templates.'
            ],
        ]);
    }
}
