<?php

declare(strict_types=1);

namespace App\Services;

use Throwable;
use App\Models\Post;
use App\DTO\StorePostData;
use App\Traits\HttpResponse;
use Illuminate\Http\JsonResponse;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Auth;

/**
 * Class PostService
 *
 * @category Service
 * @package  App\Services
 * @author   Queopius A.S. <dev.queopius@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/Queopius/
 *
 * @parameter PostRepository $repository The post repository.
 *
 * @method string index()
 * @method JsonResponse execute(StorePostData $data)
 */
final class PostService
{
    use HttpResponse;

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
     * Get all posts.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $posts = PostRepository::list();

            return $this->send200Response($posts);
        } catch (Throwable $e) {
            return $this->getResponse(
                $e->getCode(), 'Unexpected Error', $e->getMessage()
            );
        }
    }

    /**
     * Store a post.
     *
     * @param StorePostData $data The data.
     *
     * @return \Illuminate\Http\JsonResponse.
     * @throws \Throwable
     */
    public function execute(StorePostData $data): JsonResponse
    {
        try {
            $post = Post::create(
                [
                    'title' => $data->title,
                    'excerpt' => $data->excerpt,
                    'body' => $data->body,
                ]
            );

            $post->author()->associate(Auth::user());

            return $this->send201Response($post);

        } catch (\Throwable $e) {
            return $this->getResponse(
                $e->getCode(), 'Unexpected error', $e->getMessage()
            );
        }
    }
}
