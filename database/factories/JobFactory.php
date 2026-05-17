<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => '₱' . number_format(fake()->numberBetween(32000, 85000)),
            'description' => fake()->realText(200), 
        ];
    }
}