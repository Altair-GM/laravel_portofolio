<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'skill1'=>70,
            'skill2'=>90,
            'skill3'=>70,
            'skill4'=>90,
            'skill1_txt'=>"HTML CSS",
            'skill2_txt'=>"PSD DESIGN",
            'skill3_txt'=>"SOCIAL MEDIA",
            'skill4_txt'=>"LEADERSHIP",
        ]);
    }
}
