<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ExampleRepository;

class ExampleController extends Controller
{
    /**
     * @var ExampleRepository
     */
    protected $exampleRepository;

    /**
     * ExampleController constructor.
     *
     * @param ExampleRepository $exampleRepository
     */
    public function __construct(ExampleRepository $exampleRepository)
    {
        $this->exampleRepository = $exampleRepository;
    }


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
    public function test(Request $request)
    {
        $response = $this->exampleRepository->test($request->all());

        return $this->formatJsonOutput($response);
    }
}
