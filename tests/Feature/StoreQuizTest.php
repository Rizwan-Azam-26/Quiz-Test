<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreQuizTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_storeQuizResult()
    {
        $data["quiz"] = [
            [
                "id" => "1",
                "answer" => true
            ],
            [
                "id" => "2",
                "answer" => true
            ],
            [
                "id" => "3",
                "answer" => true
            ],
            [
                "id" => "4",
                "answer" => false
            ],
            [
                "id" => "5",
                "answer" => true
            ],
            [
                "id" => "6",
                "answer" => false
            ],
            [
                "id" => "7",
                "answer" => true
            ],
            [
                "id" => "8",
                "answer" => false
            ],
            [
                "id" => "9",
                "answer" => true
            ],
            [
                "id" => "10",
                "answer" => true
            ],

        ];

        $response = $this->post('/api/quiz',
            $data
        );

        $response->assertStatus(200)
            ->assertJson([
                "success" => true,
            ])
            ->assertJsonStructure([
                "data" => [
                    'quiz_id',
                    'score',
                    'percentile'
                ]
            ]);
    }
}
