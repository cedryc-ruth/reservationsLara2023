<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vider la table
        Artist::truncate();

        //Définir les données
        $artists = [
            [
                'firstname'=>'Bob',
                'lastname'=>'Sull',
            ],
            [
                'firstname'=>'Fred',
                'lastname'=>'Sull',
            ],
            [
                'firstname'=>'Lydia',
                'lastname'=>'Capellato',
            ],
        ];

        //Insérer les données dans la table artists
        DB::table('artists')->insert($artists);
    }
}
