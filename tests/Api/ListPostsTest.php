<?php

namespace Tests\Api;

use Tests\TestCase;

class ListPostsTest extends TestCase
{
    /** @test */
    function listOfPostFromApi()
    {
        $this->withoutExceptionHandling();

        $response = $this->withHeaders($this->getContents())
            ->get(
                $this->endpoint('list')
            );

        $response->assertJsonStructure(
            [
                'code',
                'message',
                'data' => [
                    '*' => []
                ]
            ]
        )
            ->assertJson(['message' => "OK"])
            ->assertStatus(200);
    }
}
