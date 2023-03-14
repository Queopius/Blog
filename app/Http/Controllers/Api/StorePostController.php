<?php

namespace App\Http\Controllers\Api;

use App\DTO\StorePostData;
use App\Services\PostService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;

/**
 * Class StorePostController
 *
 * @category Controller
 * @package  App\Http\Controllers\Api
 * @author   Queopius A.S. <dev.queopius@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/Queopius/
 *
 * @parameter PostService $service The post service.
 *
 * @method JsonResponse store(StorePostRequest $request)
 */
class StorePostController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request The request.
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Throwable
     */
    public function store(StorePostRequest $request): JsonResponse
    {
        return $this->service->execute(
            StorePostData::fromRequest($request)
        );
    }
}
