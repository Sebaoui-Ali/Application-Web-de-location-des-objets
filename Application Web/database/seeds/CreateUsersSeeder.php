<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'nom'=>'Admin',
               'prenom' => 'admin',
               'email'=>'admin@itsolutionstuff.com',
                'is_admin'=>'1',
                'ville' => 'Casablanca',
                'pays' => 'maroc',
                'username' => 'adminame',
                'tel' => '06486318',
                'code_postal' => '3200',
                'genre' => 'homme',
               'password'=> bcrypt('q'),
            ],
            [
               'nom'=>'User',
               'prenom' => 'sebaoui',
               'email'=>'user@itsolutionstuff.com',
                'is_admin'=>'0',
                'ville' => 'Settat',
                'pays' => 'maroc',
                'username' => 'userna',
                'tel' => '06486317',
                'code_postal' => '3200',
                'genre' => 'homme',
               'password'=> bcrypt('q'),
            ],
            [
                'nom'=>'Sebaoui',
                'prenom' => 'Ali',
                'email'=>'ali.sebaoui1@gmail.com',
                 'is_admin'=>'0',
                 'ville' => 'Settat',
                 'pays' => 'maroc',
                 'username' => 'AsLbG',
                 'tel' => '0648631936',
                 'code_postal' => '3200',
                 'genre' => 'homme',
                'password'=> bcrypt('q'),
             ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
