<?php

namespace App\Services\Admin;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    function __construct( private UserRepository $userRepository )
    {
    }

    public function login($email, $password):?User{
        $user = $this->userRepository->getUsernameByEmail($email);
        if(Hash::check($password,$user->password)) {
            if ($user)
                return $user;
        }
        return null;
    }
}