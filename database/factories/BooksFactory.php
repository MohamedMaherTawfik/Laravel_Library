<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
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
            'bookname'=>fake()->name(),
            'authors_id'=>rand(1,10),
            'books_categories_id'=>rand(1,10),
            'publish_year'=>fake()->date(),
            'language'=>$faker->randomElement([
                'Arabic', 'English', 'French', 'German','italian','spanish','Chinese','Hindi'
            ]),
            'quantity'=>rand(5,100),
            'status'=>$faker->randomElement(['available','borrowed','returned']),
        ];
    }
}
