<?php

namespace App\Http\Controllers\Web;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;

final class ShowPostController extends Controller
{
    /**
     * PostService constructor.
     *
     * @param $repository The post repository.
     *
     * @return void
     */
    public function __construct(protected PostRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Show the post.
     *
     * @param string $slug The slug of the post.
     *
     * @return mixed
     */
    public function show(string $slug)
    {
        return view('posts.show', [
            'view' => 'show',
            'post' => $this->repository::detail($slug),
        ]);
    }
}
