<?php

namespace App\Http\Controllers;

use App\Http\Resources\StdResource;
use App\Services\UserService;
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

    public function getUserByUsername(Request $request){

        try {
            $this->userService->getUserByUsername($request->username);
            return new StdResource(['response' => true]);
        }catch (\Throwable $e){
            if($this->getNotFoundConditional($e))
                return new StdResource(['response' => false]);
            else
                throw new \Exception($e->getMessage());
        }
    }
}
