<?php

namespace App\Services;

use App\Models\Question;
use App\Models\QuizAttempt;
use App\Repositories\QuestionRepository;
use App\Repositories\QuizAttemptRepository;
use App\Traits\RespondWithJson;
use Exception;

class QuizService
{
    private $questionRepo;
    private $quizAttemptRepo;

    public function __construct(QuestionRepository $questionRepo, QuizAttemptRepository $quizAttemptRepo)
    {
        $this->questionRepo = $questionRepo;
        $this->quizAttemptRepo = $quizAttemptRepo;
    }

    public function store($quiz): QuizAttempt
    {
        $obtained_score = 0;

        //calculate the obtained score of quiz
        foreach ($quiz as $item) {
            $question = $this->questionRepo->getById($item['id']);
            if ($question->answer == $item['answer']) {
                $obtained_score += 1;
            }
        }

        //get all scores list
        $all_scores_list = $this->quizAttemptRepo->query()->distinct('score')->orderBy('score')->pluck('score')->toArray();

        //calculate less scores from obtained score
        $less_scores_count = 0;
        foreach ($all_scores_list as $score) {
            if ($score < $obtained_score) {
                $less_scores_count += 1;
            }
        }

        // calculate percentile of obtained scores
        $percentile = ($less_scores_count / count($all_scores_list)) * 100;
        $percentile = round($percentile);

        // storing records to Database
        return $this->quizAttemptRepo->store([
            'score' => $obtained_score,
            'percentile' => $percentile
        ]);
    }
}
