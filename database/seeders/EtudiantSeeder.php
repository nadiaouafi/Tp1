<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Etudiant;
use Faker\Factory as Faker;
use App\Models\Ville;


class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $villeIds = Ville::pluck('id')->toArray();

        foreach (range(1, 20) as $i) {
            Etudiant::create([
                'nom' => $faker->name,
                'adresse' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'date_naissance' => $faker->date(),
                'ville_id' => $faker->randomElement($villeIds),
            ]);
        }
    }
}
