<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'Is 2 + 2 = 4?',
                'answer' => true,
            ],
            [
                'question' => 'Is 5 + 2 = 4?',
                'answer' => false,
            ],
            [
                'question' => 'is 30-10 = 20',
                'answer' => true,
            ],
            [
                'question' => 'is 50-10 = 20',
                'answer' => false,
            ],
            [
                'question' => 'Is Sky blue?',
                'answer' => true,
            ],
            [
                'question' => 'Apple color is purple.',
                'answer' => false,
            ],
            [
                'question' => 'is 0*10 = 10',
                'answer' => false,
            ],
            [
                'question' => 'is 0+10 = 10',
                'answer' => true,
            ],
            [
                'question' => 'is 100-110 = -10',
                'answer' => true,
            ],
            [
                'question' => 'is 200-10 = 10',
                'answer' => false,
            ]
        ];

        Question::insert($questions);
    }
}
