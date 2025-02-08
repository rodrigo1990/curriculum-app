<?php

namespace Admin\Login;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\Admin\LoginService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
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


    public function test_existing_user_returns_user(): void
    {
        $user = $this->getUser('password');

        if($user)
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }

    public function test_unexisting_user_returns_user(): void
    {
        $user = $this->getUser('useless password');

        if(empty($user))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }

    public function getUser(string $password):?User
    {
        $user = User::first();

        $request = Request::create('/admin/login', 'POST', [
            'email' => $user->email,
            'password' => $password
        ]);

        $user = $this->service->login($request);

        return $user;
    }
}
