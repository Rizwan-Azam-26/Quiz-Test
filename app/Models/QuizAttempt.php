<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAttempt extends Model
{
    use HasFactory;

    protected $table = 'quiz_attempts';

    protected $fillable = [
        'score',
        'percentile'
    ];

    public static function rules(): array
    {
        return [
            'quiz' => 'required|array|min:10',
            'quiz.*.answer' => 'required|boolean',
            'quiz.*.id' => 'required|integer'
        ];
    }

    public static function messages(): array
    {
        return [
            "quiz.min" => 'Please answer all the question!',
            "quiz.*.answer.boolean" => 'answer field must be of boolean type',
            "quiz.*.id.integer" => 'id must be of integer type',
            "quiz.*.id.required" => 'id is required for every answer'
        ];
    }
}
