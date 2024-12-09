<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Authors>
 */
class AuthorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker=Faker::create();
        return [
            'name'=>fake()->name(),
            'nationallity'=>$faker->randomElement([
                'American', 'British', 'Canadian', 'French', 'German',
                'Indian', 'Chinese', 'Japanese', 'Brazilian', 'Mexican','Egyptian','Iraq','Saudian','Russian'
            ]),
            'biography'=>fake()->text(),
            'birth_date'=>fake()->date(),
        ];
    }
}
