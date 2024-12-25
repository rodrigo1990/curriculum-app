<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Site;
use App\Models\Mongo\BodyStylesMongo;
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
    }
    /**
     * A basic test example.
     */
    public function test_db_seed_was_successful(): void
    {
        $this->assertDatabaseCount('sites', 1);

    }
}
