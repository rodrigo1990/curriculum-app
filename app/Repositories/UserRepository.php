<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    public function getUserByUsername(string $username):User
    {
        return User::where('username', $username)->first();
    }

    public function getAllUsers():Collection
    {
        return User::select('username','id')->get();
    }

    public function getUsernameByEmail(string $email):?User{
        return User::where('email', $email)->first();
    }

}