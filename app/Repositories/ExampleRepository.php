<?php

/**
 * Created by PhpStorm.
 * User: chensh
 * Date: 2018/1/22
 * Time: 17:20
 */
namespace App\Repositories;

use Illuminate\Support\Facades\Cache;

class ExampleRepository
{
    const CACHE_COOKIE = 'cache_cookie';

    /**
     * just for testing
     *
     * @param $params
     * @return array
     */
    public function test($params)
    {
        //Cache::forget(self::CACHE_COOKIE);
        //Cache::flush();

        if (array_get($params, 'cookie')) {
            Cache::forever(self::CACHE_COOKIE, $params['cookie']);
        }

        return Cache::get(self::CACHE_COOKIE, 'nothing');
    }
}