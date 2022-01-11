<?php

namespace Database\Factories;

use App\Services\QuizService;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizAttemptFactory extends Factory
{
    private $scores = [];
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'score' => rand(0, 10),
            'percentile' => rand(1, 100),
        ];
    }
}
