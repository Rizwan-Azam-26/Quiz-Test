<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowQuizTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_showQuestion()
    {
        $response = $this->get('/api/questions');

        $response->assertStatus(200);
    }
}
