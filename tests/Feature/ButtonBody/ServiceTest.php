<?php

namespace ButtonBody;

use App\Models\Body;
use App\Repositories\BodyMongoRepository;
use App\Repositories\ButtonsMongoRepository;
use App\Repositories\ButtonsRepository;
use App\Repositories\SiteRepository;
use App\Repositories\UserRepository;
use App\Services\ButtonsBodyService;
use App\Services\SiteService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    private $service;

    use RefreshDatabase;

    protected function setUp(): void{
        parent::setUp();
//        Artisan::call('db:seed');
        $this->service = new ButtonsBodyService(
            new ButtonsRepository(),
            new ButtonsMongoRepository(),
        );
    }

    public function test_get_button_body_by_body_has_styles(): void
    {
        $buttons = $this->service->getButtonsBodyByBody(Body::find(1));

        foreach ($buttons as $button) {
            if(empty($button->styles))
                $this->assertFalse(true);
        }

        $this->assertTrue(true);
    }

}