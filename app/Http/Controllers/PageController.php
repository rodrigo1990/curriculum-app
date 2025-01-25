<?php

namespace App\Http\Controllers;

use App\Http\Resources\StdResource;
use App\ModelDtos\PageDto;
use App\Services\ContentService;
use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function __construct(
        private PageService $pageService,
        private ContentService $contentService,
    )
    {
    }

    public function get(Request $request){
        if($request->page_slug == 'home')
            $page = $this->pageService->getDefaultPageAndContent($request->username);
        else
            $page = $this->pageService->getPageAndContent($request->page_slug, $request->username);
        return new StdResource($page);
    }

}
