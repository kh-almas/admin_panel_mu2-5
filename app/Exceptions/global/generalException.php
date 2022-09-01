<?php

namespace App\Exceptions\global;

use Exception;
use Illuminate\Http\JsonResponse;

class generalException extends Exception
{
    /**
     * Report the exception.
     *
     * @return bool|null
     */
    public function report()
    {
        //
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return jsonResponse
     */
    public function render($request)
    {
        return new jsonResponse([
            'errors' => [
                'message' => $this->getMessage(),
            ]
        ], $this->code);
    }
}
