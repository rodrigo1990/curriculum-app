<?php

namespace Header;

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
        $header = $this->service->getHeaderById(1);
    }
}