<?php

namespace Admin\User;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\Admin\LoginService;
use App\Services\Admin\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    private $service;

    use RefreshDatabase;

    protected function setUp(): void{
        parent::setUp();
//        Artisan::call('db:seed');
        $this->service = new LoginService(new UserRepository());
    }


//    public function test_get_site_by_username_has_mongo_records(): void
//    {
//        $user = User::first();
//
//        $user = $this->service->login($user->email,'password');
//
//        if(!empty($user))
//            $this->assertTrue(true);
//        else
//            $this->assertFalse(true);
//    }
}
