<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VerifyMessageTest extends TestCase
{
    /** Test */
    public function test_received_message_is_ok()
    {
        $response = $this->json(
            'POST',
            '/api/test1',
            [
                'title' => 'Test Topic',
                "data" => [
                    "message" => "Test Message",
                    "published_date" => "2021-04-21 19:10:43"
                ]
            ]
        );

        $response->assertStatus(200)->assertJson([
            'status' => true,
        ]);
    }
}
