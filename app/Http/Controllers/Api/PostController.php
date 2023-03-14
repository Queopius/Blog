<?php

namespace App\Http\Controllers\Api;

use App\Services\PostService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * Class PostController
 *
 * @category Controller
 * @package  App\Controllers
 * @author   Queopius A.S. <dev.queopius@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/Queopius/
 *
 * @parameter PostService $service The post service.
 *
 * @method JsonResponse index()
 */
class PostController extends Controller
{
    /**
     * PostController constructor.
     *
     * @param $service The post service.
     *
     * @return void
     */
    public function __construct(protected PostService $service)
    {
        $this->service = $service;
    }

    /**
     * Get all posts.
     *
     * @return \Illuminate\Http\JsonResponse The response
     */
    public function index(): JsonResponse
    {
        return $this->service->index();
    }
}
