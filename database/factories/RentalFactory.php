<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $allBookIds = Book::all()->pluck('id');
        return [
            "book_id" => fake()->randomElement($allBookIds),
            "start_date" => fake()->dateTimeBetween('now', '+2 weeks'),
            "end_date" => fake()->dateTimeBetween('now', '+4 weeks'),
        ];
    }
}
