<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UtentiTableSeeder extends Seeder
{
    public function run()
    {
        // Let's clear the users table first
        Utenti::truncate();

        $faker = \Faker\Factory::create();


        Utenti::create([
            'name' => 'Nome1',
            'surname' => 'Cognome1',
            'email' => 'email@test.com',
        ]);

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'surname' => $faker->surname,
                'email' => $faker->email,
            ]);
        }
    }
}
