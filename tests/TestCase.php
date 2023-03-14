<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    /**
     * Ge Contents
     *
     * @return array
     */
    protected function getContents()
    {
        return [
            'Accept' => 'application/json',
        ];
    }

    /**
     * Endpoint
     *
     * @param mixed $route The route.
     *
     * @return void
     */
    protected function endpoint($route)
    {
        return '/api/v01/post/'.$route;
    }
}
