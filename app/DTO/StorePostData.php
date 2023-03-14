<?php

declare(strict_types=1);

namespace App\DTO;

use Throwable;
use Spatie\LaravelData\Data;
use App\Http\Requests\Post\StorePostRequest;

/**
 * Class StorePostData
 *
 * @category DTO
 * @package  App\DTO
 * @author   Queopius A.S. <dev.queopius@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/Queopius
 *
 * @property string $title The title.
 * @property string $excerpt The excerpt.
 * @property string $body The body.
 *
 * @method static self fromRequest(StorePostRequest $request)
 */
class StorePostData extends Data
{
    /**
     * StorePostData constructor.
     *
     * @param string $title   The title.
     * @param string $excerpt The excerpt.
     * @param string $body    The body.    *
     *
     * @return void
     */
    public function __construct(
        public readonly string $title,
        public readonly string $excerpt,
        public readonly string $body,
    ) {}

    /**
     * From request.
     *
     * @param StorePostRequest $request - The request
     *
     * @return self
     *
     * @throws \Throwable
     */
    public static function fromRequest(StorePostRequest $request): self
    {
        return self::from(
            [
                'title' => $request->get('title'),
                'excerpt' => $request->get('excerpt'),
                'body' => $request->get('body'),
            ]
        );
    }
}
