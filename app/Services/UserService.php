<?php

namespace App\Services;

use App\ModelDtos\UsersDto;
use App\Models\User;
use App\Repositories\UserRepository;

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
}