<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuizTest extends TestCase
{
    /**
     * Test GET all questions API
     *
     * @return void
     */
    public function testsQuizQuestions()
    {
        $headers = [];
        $payload = [];

        $this->json('GET', '/api/questions', $payload, $headers)
            ->assertStatus(200);
    }

    /**
     * Test GET all questions API and it's response.
     *
     * @return void
     */
    public function testsQuizQuestionsResponseGetCorrectly()
    {
        $headers = [];
        $payload = [];

        $this->json('GET', '/api/questions', $payload, $headers)
            ->assertStatus(200)
            ->assertJsonStructure([
                'questions' => [
                    ['id', 'question', 'answer', 'created_at', 'updated_at']
                ],
            ]);
    }
}
