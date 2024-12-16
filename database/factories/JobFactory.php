<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['$50,000,000 USD' , '$90,000,00 USD' , '$100,000,000 USD','$150,000,00 USD']),
            'location' => fake()->randomElement([fake()->city(), fake()->country(), 'Remote']),
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}