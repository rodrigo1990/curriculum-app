<?php

namespace Header;

use App\Models\Site;
use App\Repositories\ButtonsMongoRepository;
use App\Repositories\ButtonsRepository;
use App\Repositories\HeaderRepository;
use App\Services\ButtonsService;
use App\Services\HeaderService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    private $service;

    use RefreshDatabase;

    protected function setUp(): void{
        parent::setUp();
        $this->service = new HeaderService(new HeaderRepository(), new ButtonsService(new ButtonsRepository(), new ButtonsMongoRepository()));
    }

    public function test_get_header_by_id(){
        $headerDto = $this->service->getHeaderBySiteId(Site::first()->id);
        if(!empty($headerDto))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }


    public function test_get_header_has_buttons(){
        $headerDto = $this->service->getHeaderBySiteId(Site::first()->id);
        if(!empty($headerDto->header->buttons))
            $this->assertTrue(true);
        else
            $this->assertFalse(true);
    }
}