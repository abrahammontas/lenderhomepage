<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Function to return Company objects
     * @param $data
     * @param string $message
     * @param string $status
     * @return \Illuminate\Http\JsonResponse
     */
    protected function response($data = "", $message = 'success', $status = 'ok')
    {
        $response = [
            'status' => $status,
            'message' => $message,
            'area' => $this->area,
            'response' => $this->responseName,
            'data' => $data
        ];

        return response()->json($response);
    }
}
