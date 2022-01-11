<?php

namespace App\Traits;

trait RespondWithJson
{
    protected function success($data = [], $status = 200)
    {
        return response([
            'success' => true,
            'data' => $data,
        ], $status);
    }

    protected function failure($message, $status = 422)
    {
        return response([
            'success' => false,
            'message' => $message,
        ], $status);
    }
}
