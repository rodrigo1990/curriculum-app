<?php

namespace App\Services\Admin;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    function __construct(private UserRepository $userRepository)
    {
    }



    public function login($request):?User{
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $user = $this->userRepository->getUsernameByEmail($request->get('email'));
            if(Auth::user())
                return $user;
            else
                return null;
        }
        return null;
    }
}