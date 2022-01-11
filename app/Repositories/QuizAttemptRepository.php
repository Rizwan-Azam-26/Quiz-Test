<?php

namespace App\Repositories;

use App\Models\QuizAttempt;
use App\Traits\BaseRepository;

class QuizAttemptRepository
{
    use BaseRepository;

    public function __construct(QuizAttempt $quizAttempt)
    {
        $this->model = $quizAttempt;
    }
}
