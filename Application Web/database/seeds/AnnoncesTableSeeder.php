<?php

use App\Annonce;
use Illuminate\Database\Seeder;

class AnnoncesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $annonce = [
            [
                'image1' => '/images/annonces/11.jpg',
                'image2' => '/images/annonces/12.jpg',
                'image3' => '/images/annonces/13.jpg',
                'titre' => 'XBOX',
                'prix' => '100',
                'caution' => '10000',
                'description' => 'XBOX is The best Game ',
                'etat_annonce' => 'Moyen',
                'categorie' => 'Informatique',
                'user_id' => 2,
                'debut' => '2020-05-16',
                'Ville' => 'Casablance',
                'fin' => '2020-05-18',
                'date_fin_premium' => '2020-05-24',
            ],
            [
                'image1' => '/images/annonces/21.jpg',
                'image2' => '/images/annonces/22.jpg',
                'image3' => '/images/annonces/23.jpg',
                'titre' => 'House',
                'prix' => '1000',
                'caution' => '999999',
                'description' => 'This House is The best House ',
                'etat_annonce' => 'Neuf',
                'categorie' => 'immobilier',
                'user_id' => 3,
                'Ville' => 'Casablance',
                'debut' => '2020-05-17',
                'fin' => '2020-06-18',
                'date_fin_premium' => '2020-05-17',
            ],
            [
                'image1' => '/images/annonces/31.jpg',
                'image2' => '/images/annonces/32.jpg',
                'image3' => '/images/annonces/33.jpg',
                'titre' => 'Voiture Renault ',
                'prix' => '900',
                'caution' => '100000',
                'description' => 'Renault is The best Car ',
                'etat_annonce' => 'Bon',
                'categorie' => 'Car',
                'user_id' => 3,
                'debut' => '2020-05-20',
                'Ville' => 'Casablance',
                'fin' => '2020-05-30',
                'date_fin_premium' => '2020-05-17',
            ],
        ];

        foreach ($annonce as $key => $value) {
            Annonce::create($value);
        }
    }
}
