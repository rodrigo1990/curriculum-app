<?php

namespace Tests\Feature\Site;

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
        $this->service = new SiteService(new SiteRepository(), new SiteMongoRepository(), new UserRepository());
    }

    public function test_service_respose_has_mongo_records(): void
    {
        $site = $this->service->getSite(1);

        if(!empty($site->styles))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }


    public function test_get_site_by_username_has_mongo_records(): void
    {
        $site = $this->service->getSiteByUser('rodrigo1990');

        if(!empty($site->styles))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }
}
