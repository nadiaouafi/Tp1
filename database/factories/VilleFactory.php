<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VilleFactory extends Factory
{
    protected $model = \App\Models\Ville::class;
    public function definition(): array
    {
        return [
            'nom' => $this->faker->city(),
        ];
    }
}
