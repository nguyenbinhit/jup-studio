<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $count = 10;
    public $sort = 'desc';
    public $sortBy = 'id';

    /**
     * Error Message
     *
     * @param string $message
     * @param integer $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorMessage($message, $status): JsonResponse
    {
        return response()->json(['error' => ['message' => $message]], $status);
    }
}
