<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('about')->insert([
           "title1"=>"About Me",
           "title2"=>"Qui je suis ?",
           "txt1"=>"J’ai commencé en bas de l’echelle,
           n’ayant pas obtenu mon diplôme, je
           devais redoubler d’effort pour prouver
           mes compétences et cela a payer.
           Après quelques mois, j’étais nommé cher
           électromécanicien.
           Suite à la pandémie, mon contrat a prit
           fin. Cela m’a renforcé d’avantage, autant
           professionnellement que
           psychologiquement.
           Professionnellement, ça m’a prouvé que
           les efforts payent, et que si on se donne
           les moyens, on peut obtenir le fruit d’une
           valeur équivalent à l’effort fournit.
           Psychologiquement, ça m’a renforcé, et
           j’ai appris à ne jamais lâcher prise, à
           rebondir, et aller de l’avant.",
           "img"=>"images/MohaBled.jpg"
       ]);
    }
}
