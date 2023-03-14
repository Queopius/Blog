<?php

namespace App\Repositories;

use App\Models\Post;

/**
 * Class PostRepository
 *
 * @category Repository
 * @package  App\Repositories
 * @author   Queopius A.S. <dev.queopius@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/Queopius
 *
 * @method static mixed list()
 */
class PostRepository
{
    /**
     * Get all posts.
     *
     * @return mixed
     */
    public static function list()
    {
        return Post::with('author')->get();
    }

    /**
     * Get a post by slug.
     *
     * @param string $slug The post slug.
     *
     * @return mixed
     */
    public static function detail(string $slug)
    {
        return Post::where('slug', $slug)
            ->with('author')->firstOrFail();
    }
}
