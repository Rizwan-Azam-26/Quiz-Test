<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Repositories\QuestionRepository;
use App\Services\QuizService;
use App\Traits\RespondWithJson;

class QuestionController extends Controller
{
    use RespondWithJson;

    protected $questionRepo;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(QuestionRepository $questionRepo)
    {
        $this->questionRepo = $questionRepo;
    }

    public function index()
    {
        $questions = $this->questionRepo->all();
        return $this->success(QuestionResource::collection($questions));
    }
}
