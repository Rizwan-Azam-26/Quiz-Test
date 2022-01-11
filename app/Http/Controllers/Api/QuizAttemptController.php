<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuizAttemptResource;
use App\Models\QuizAttempt;
use App\Services\QuizService;
use App\Traits\RespondWithJson;
use Illuminate\Http\Request;
use Validator;

class QuizAttemptController extends Controller
{
    use RespondWithJson;

    protected $quizService;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct(QuizService $quizService)
    {
        $this->quizService = $quizService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //set the validation
        $validator = Validator::make($request->all(), QuizAttempt::rules(), QuizAttempt::messages());

        $messages = $validator->getMessageBag()->toArray();

        //return in case of any error
        if (count($messages) > 0) {
            return $this->failure(\Arr::first($messages));
        }

        $result = $this->quizService->store($request->quiz);

        return $this->success((new QuizAttemptResource($result)));
    }
}
