<?php

namespace Pages;

use App\Models\Body;
use App\Models\Page;
use App\Models\Site;
use App\Models\User;
use App\Repositories\ContentMongoRepository;
use App\Repositories\ContentRepository;
use App\Repositories\PageRepository;
use App\Services\ContentService;
use App\Services\PageService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    private $service;
    use RefreshDatabase;

    protected function setUp(): void{
        parent::setUp();
        $this->service = new PageService(
            new PageRepository(),
            new ContentService(
                new ContentRepository(),
                new ContentMongoRepository()
            )
        );
    }

    public function test_get_page_by_id_and_username(){
        $site = Site::with(['user','body'])->first();
        $page = Page::where('body_id', $site->body()->first()->id)->first();
        $pageResult = $this->service->getPageAndContent($page->slug, $site->user()->first()->username);
        if($pageResult)
            $this->assertTrue(true);
        else
            $this->assertTrue(false);
    }


    public function test_get_default_page(){
        $site = Site::with(['user','body'])->first();
        $pageResult = $this->service->getDefaultPageAndContent($site->user()->first()->username);
        if($pageResult && $pageResult->page->default === 1)
            $this->assertTrue(true);
        else
            $this->assertTrue(false);
    }
}