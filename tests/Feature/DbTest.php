<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Site;
use App\Repositories\SiteRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class DbTest extends TestCase
{
    use RefreshDatabase;

    function __construct(string $name)
    {
        parent::__construct($name);
    }

    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('db:seed');
    }
    /**
     * A basic test example.
     */
    public function test_db_seed_was_successful(): void
    {
        $site = Site::first();
        if($site)
            $this->assertTrue(true);
        else {
            $this->assertFalse(true);
        }

    }
}
