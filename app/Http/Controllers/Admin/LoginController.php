<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\StdResource;
use App\Services\Admin\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(private LoginService $loginService)
    {
    }

    public function isAuthenticated(Request $request):bool{
        return $request->user();
    }

    public function login(Request $request){
        $user = $this->loginService->login(
            $request
        );

        $response = [
            'token' => $user->createToken('web')->plainTextToken,
        ];
        return response()->json($response);
    }
}
