<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;

final class PostsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return view('posts.index', [
            'view' => 'index',
            'posts' => PostRepository::list(),
        ]);
    }
}
