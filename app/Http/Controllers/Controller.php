<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * Format API output.
     *
     * @param mixed $result
     * @param string $message
     * @param int $code
     * @return array
     */
    protected function formatJsonOutput($result, $message = 'success', $code = null)
    {
        return response()->json([
            'code' => is_null($code) ? config('custom_code.success.code', 0) : $code,
            'msg' => $message,
            'info' => $result
        ]);
    }
}
