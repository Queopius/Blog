<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Trait HttpResponse
 *
 * @category Trait
 * @package  App\Traits
 * @author   Queopius A.S. <dev.queopius@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/Queopius
 *
 * @method JsonResponse getResponse(int $code, string $message, mixed $data = null)
 * @method JsonResponse send200Response(mixed $data = null)
 * @method JsonResponse send201Response(mixed $data = null)
 * @method JsonResponse send404Response(mixed $data = null)
 * @method JsonResponse send422Response(mixed $data = null)
 */
trait HttpResponse
{
    /**
     * Send HTTP_OK response
     *
     * @param mixed $data The data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function send200Response($data = null): JsonResponse
    {
        return $this->getResponse(Response::HTTP_OK, 'OK', $data);
    }

    /**
     * Send HTTP_CREATED response
     *
     * @param mixed $data The data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function send201Response($data = null): JsonResponse
    {
        return $this->getResponse(Response::HTTP_CREATED, 'CREATED', $data);
    }

    /**
     * Send HTTP_NOT_FOUND response
     *
     * @param mixed $data The data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function send404Response($data = null): JsonResponse
    {
        return $this->getResponse(Response::HTTP_NOT_FOUND, 'NOT FOUND', $data);
    }

    /**
     * Send HTTP_UNPROCESSABLE_ENTITY response
     *
     * @param mixed $data - The data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function send422Response($data = null): JsonResponse
    {
        return $this->getResponse(
            Response::HTTP_UNPROCESSABLE_ENTITY, 'UNPROCESSABLE ENTITY', $data
        );
    }

    /**
     * Send Generic HTTP response
     *
     * @param int    $code    - The code.
     * @param string $message - The message.
     * @param mixed  $data    - The data.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getResponse(int $code, string $message, $data = null): JsonResponse
    {
        return response()->json(
            [
                'code' => $code,
                'message' => $message,
                'data' => $data,
            ],
            $code
        );
    }
}
