<?php

namespace App\Services\Admin;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    function __construct(private UserRepository $userRepository)
    {
    }

    public function login($request):?Authenticatable{
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            return Auth::user();
        }
        return null;
    }

    public function logout():bool{
        Auth::guard('web')->logout();
        return true;
    }
}