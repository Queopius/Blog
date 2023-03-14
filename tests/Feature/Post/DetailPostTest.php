<?php

namespace Tests\Feature\Post;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class DetailPostTest extends TestCase
{
    /** @test */
    function postDatabaseHasExpeectedColumns()
    {
        $this->withExceptionHandling();

        $this->assertTrue(
            Schema::hasColumns(
                'posts',
                [
                    'id',
                    'title',
                    'slug',
                    'excerpt',
                    'body',
                    'published_at',
                    'author_id',
                    'created_at',
                    'updated_at',
                ]
            ),
            1
        );
    }
    /** @test */
    function itCanViewPostShowPage()
    {
        $this->withExceptionHandling();

        $author = User::factory()
            ->create(
                [
                    'name' => 'John Doe',
                    'email' => 'john@mail.com',
                    'address' => 'Jl. Jalan',
                    'phone' => '08123456789',
                    'company' => 'Acme Inc.',
                    'website' => 'https://acme.com',
                ]
            );

        $post = Post::factory()
            ->create(
                [
                    'title' => 'My First Post',
                    'slug' => 'my-first-post',
                    'excerpt' => 'This is my first post',
                    'body' => 'This is my first post',
                    'published_at' => now(),
                    'author_id' => $author->id,
                ]
            );

        $this->get(route('posts.show', $post->slug))
            ->assertOk();

        $this->assertDatabaseHas('posts', ['title' => 'My First Post']);
        $this->assertDatabaseHas('users', ['name' => 'John Doe']);
    }
}
