<?php

namespace App\Repositories;

use App\Models\Question;
use App\Traits\BaseRepository;

class QuestionRepository
{
    use BaseRepository;

    public function __construct(Question $question)
    {
        $this->model = $question;
    }
}
