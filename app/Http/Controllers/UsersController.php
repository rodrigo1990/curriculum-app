<?php

namespace App\Http\Controllers;

use App\Http\Resources\StdResource;
use App\Services\UserService;
use App\Services\UsersService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function __construct( private UserService $userService)
    {
    }

    public function getAllUsers(){

        try {
            $users = $this->userService->getAllUsers();
            return new StdResource($users);
        }catch (\Throwable $e){
            if($this->getNotFoundConditional($e))
                throw new \Exception('Users not found');
            else
                throw new \Exception($e->getMessage());
        }
    }
}
