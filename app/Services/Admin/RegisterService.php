<?php

namespace App\Services\Admin;

use App\Models\User;
use App\Repositories\RegisterRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterService
{
    public function __construct(private RegisterRepository $registerRepository)
    {
    }

    public function register(array $data): User
    {
        $this->validateUniqueUser($data);

        $userData = [
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ];

        $user = $this->registerRepository->createUser($userData);

        $user->sendEmailVerificationNotification();

        return $user;
    }

    private function validateUniqueUser(array $data): void
    {
        if ($this->registerRepository->findByEmail($data['email'])) {
            throw ValidationException::withMessages([
                'email' => ['The email has already been taken.'],
            ]);
        }

        if ($this->registerRepository->findByUsername($data['username'])) {
            throw ValidationException::withMessages([
                'username' => ['The username has already been taken.'],
            ]);
        }
    }
}
