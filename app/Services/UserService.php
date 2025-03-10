<?php

namespace App\Services;

use App\ModelDtos\UsersDto;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    function __construct(private UserRepository $userRepository)
    {}

    public function getUserByUsername(string $username):User
    {
        return $this->userRepository->getUserByUsername($username);
    }

    public function getAllUsers():UsersDto
    {
        $usersDto = new UsersDto();
        $usersDto->users = $this->userRepository->getAllUsers();
        return $usersDto;
    }

    public function registerUser(array $data): User
    {
        $data['password'] = Hash::make($data['password']);
        $user = $this->userRepository->createUser($data);
        $user->sendEmailVerificationNotification();
        return $user;
    }
}