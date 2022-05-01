<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use YaangVu\LaravelBase\Controllers\BaseController;

class AuthController extends BaseController
{

    function __construct()
    {
        $this->service = new AuthService();
        parent::__construct();
    }

    public function register(Request $request): JsonResponse
    {
        return response()->json($this->service->register($request));
    }

    public function logout(): JsonResponse
    {
        return response()->json($this->service->logout());
    }

    public function login(Request $request): JsonResponse
    {
        return response()->json($this->service->login($request));
    }
}
