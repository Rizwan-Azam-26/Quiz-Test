<?php

namespace Database\Seeders;

use App\Models\QuizAttempt;
use Illuminate\Database\Seeder;

class QuizAttemptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuizAttempt::factory()
                    ->count(1000)
                    ->create();
    }
}
