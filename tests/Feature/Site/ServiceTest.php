<?php

namespace Tests\Feature\Site;

use App\Repositories\ButtonsRepository;
use App\Repositories\SiteMongoRepository;
use App\Repositories\SiteRepository;
use App\Repositories\UserRepository;
use App\Services\SiteService;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    private $service;

    protected function setUp(): void{
        parent::setUp();
//        Artisan::call('db:seed');
        $this->service = new SiteService(new SiteRepository(), new SiteMongoRepository(), new UserRepository(), new ButtonsRepository());
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

        if(!empty($site->body->buttonsBody))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }
}
