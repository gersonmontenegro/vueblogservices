<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function GetPosts()
    {
        $response = $this->post('api/auth/posts/get/all');
        $response->assertStatus(200);
    }
    
    /**
     * @test
     * @return void
     */
    public function PostsData()
    {
        $response = $this->post('api/auth/posts/get/all');
        $response->assertJsonStructure([
            '*' => [
                '_id',
                'id',
                'title',
                'text',
                'creator'
            ]
        ]);
    }
}
