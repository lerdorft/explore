<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * @api {get} /foo just for testing
     * @apiName get 'hello world'
     * @apiVersion 1.0.0
     * @apiGroup Example
     * @apiDescription just for testing
     *
     * @apiSuccessExample {yaml} Success Response Example
     *      code: 0,
     *      msg: 'success',
     *      data:
     *          test: 'hello world'
     */
    public function test()
    {
        return $this->formatJsonOutput(['test' => 'hello world']);
    }
}
