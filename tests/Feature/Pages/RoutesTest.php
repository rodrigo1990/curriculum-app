<?php

namespace Pages;

use App\Models\Body;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void{
        parent::setUp();
    }

    public function test_get_page_home_is_200(): void
    {
        $response = $this->get('/api/page/rodrigo1990/home');

        $response->assertStatus(200);
    }

    public function test_get_any_page_is_200(): void
    {
        $user = User::with('site')->where('username','rodrigo1990')->first();

        $body = Body::with('pages')->where('site_id',$user->site->id)->first();

        $page = $body->pages()->first();

        $response = $this->get('/api/page/rodrigo1990/'.$page->slug);

        $response->assertStatus(200);
    }
}
