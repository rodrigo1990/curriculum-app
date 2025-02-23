<?php

namespace Tests\Feature\Site;

use App\Repositories\ButtonsMongoRepository;
use App\Repositories\ButtonsRepository;
use App\Repositories\BodyMongoRepository;
use App\Repositories\HeaderRepository;
use App\Repositories\SiteRepository;
use App\Repositories\UserRepository;
use App\Services\ButtonsService;
use App\Services\HeaderService;
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
            new ButtonsService(new ButtonsRepository(), new ButtonsMongoRepository()),
            new HeaderService(new HeaderRepository(), new ButtonsService(new ButtonsRepository(), new ButtonsMongoRepository()))
        );
    }



    public function test_get_site_by_username_has_mongo_records(): void
    {
        $siteDto = $this->service->getSiteByUser('rodrigo1990');

        if(!empty($siteDto->site->body->styles))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }

    public function test_get_site_by_username_has_header(): void
    {
        $siteDto = $this->service->getSiteByUser('rodrigo1990');

        if(!empty($siteDto->site->header))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }

    public function test_get_site_has_body_buttons(): void
    {
        $siteDto = $this->service->getSiteByUser('rodrigo1990');

        if(!empty($siteDto->site->body->buttons))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }


    public function test_get_site_has_header(): void
    {
        $siteDto = $this->service->getSiteByUser('rodrigo1990');

        if(!empty($siteDto->site->header))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }


    public function test_get_site_has_header_buttons(): void
    {
        $siteDto = $this->service->getSiteByUser('rodrigo1990');

        if(!empty($siteDto->site->header->buttons))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }
}
