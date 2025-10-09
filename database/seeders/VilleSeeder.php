<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Ville;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('villes')->insert([
            ['nom' => 'Montréal'],
            ['nom' => 'Laval'],
            ['nom' => 'Longueuil'],
            ['nom' => 'Québec'],
            ['nom' => 'Gatineau'],
            ['nom' => 'Sherbrooke'],
            ['nom' => 'Trois-Rivières'],
            ['nom' => 'Saguenay'],
            ['nom' => 'Drummondville'],
            ['nom' => 'Granby'],
            ['nom' => 'Saint-Jérôme'],
            ['nom' => 'Blainville'],
            ['nom' => 'Repentigny'],
            ['nom' => 'Terrebonne'],
            ['nom' => 'Brossard'],
        ]);
    }
}
