<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\StdResource;
use App\Services\Admin\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct( private UserService $userService )
    {
    }

    public function login(Request $request):StdResource{
        $token = $this->userService->login(
            $request->get('email'),
            $request->get('password')
        );
        return new StdResource($token);
    }
}
