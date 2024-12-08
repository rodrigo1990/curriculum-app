<?php

namespace Tests\Feature\Site;

use App\Repositories\SiteMongoRepository;
use App\Repositories\SiteRepository;
use App\Services\SiteService;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    private $service;

    protected function setUp(): void{
        parent::setUp();
//        Artisan::call('db:seed');
        $this->service = new SiteService(new SiteRepository(), new SiteMongoRepository());
    }

    public function test_service_respose_has_mongo_records(): void
    {
        $site = $this->service->getSite(1);

        if(!empty($site->styles))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }
}
