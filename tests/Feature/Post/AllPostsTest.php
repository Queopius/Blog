<?php

namespace Tests\Feature\Post;

use Tests\TestCase;

class AllPostsTest extends TestCase
{
    /** @test */
    function itCanViewListPostsPage()
    {
        $this->withExceptionHandling();

        $this->get(route('posts.index'))
            ->assertOk()
            ->assertSeeText('Posts');
    }
}
