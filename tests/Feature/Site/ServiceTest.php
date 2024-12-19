<?php

namespace Tests\Feature\Site;

use App\Repositories\ButtonsBodyMongoRepository;
use App\Repositories\ButtonsRepository;
use App\Repositories\BodyMongoRepository;
use App\Repositories\SiteRepository;
use App\Repositories\UserRepository;
use App\Services\ButtonsBodyService;
use App\Services\SiteService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    private $service;

    use RefreshDatabase;

    protected function setUp(): void{
        parent::setUp();
//        Artisan::call('db:seed');
        $this->service = new SiteService(new SiteRepository(),
            new BodyMongoRepository(),
            new UserRepository(),
            new ButtonsBodyService(new ButtonsRepository(), new ButtonsBodyMongoRepository()),
        );
    }



    public function test_get_site_by_username_has_mongo_records(): void
    {
        $site = $this->service->getSiteByUser('rodrigo1990');

        if(!empty($site->body->styles))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }

    public function test_get_site_by_username_has_header(): void
    {
        $site = $this->service->getSiteByUser('rodrigo1990');

        if(!empty($site->header))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }

    public function test_get_site_has_body_buttons(): void
    {
        $site = $this->service->getSiteByUser('rodrigo1990');

        if(!empty($site->body->buttons))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }
}
