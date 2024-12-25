<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getUserByUsername(string $username):User
    {
        return User::where('username', $username)->first();
    }
}