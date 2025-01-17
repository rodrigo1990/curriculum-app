<?php

namespace Tests\Feature\Site;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void{
        parent::setUp();
    }

    public function test_main_api_returns_200_response(): void
    {
        $response = $this->get('/api/rodrigo1990');

        $response->assertStatus(200);
    }
}
