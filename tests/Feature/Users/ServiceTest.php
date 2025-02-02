<?php

namespace Tests\Feature\Users;

use App\Repositories\UserRepository;
use App\Repositories\UsersRepository;
use App\Services\UserService;
use App\Services\UsersService;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    private $usersService;

    function __construct(string $name)
    {
        parent::__construct($name);
        $this->usersService = new UserService(new UserRepository());
    }

    public function testGetAllUsers(){
        $usersDto = $this->usersService->getAllUsers();
        $this->assertGreaterThan(0, count($usersDto->users));
    }
}