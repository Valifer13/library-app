<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => Book::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'admin_id' => Admin::inRandomOrder()->first()->id,
            'borrow_date' => now(),
            'due_date' => now()->addDays(7),
            'return_date' => fake()->optional()->dateTimeBetween('now', '+3 days'),
            'status' => fake()->randomElement(['borrowed', 'returned', 'overdue']),
        ];
    }
}
