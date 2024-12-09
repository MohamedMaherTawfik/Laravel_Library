<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BorrowBooks>
 */
class BorrowBooksFactory extends Factory
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
            'customers_id'=>rand(1,10),
            'books_id'=>rand(1,10),
            'status'=>$faker->randomElement(['borrowed']),
            'borrow_date'=>fake()->date(),
            'return_date'=>fake()->date(),
        ];
    }
}
