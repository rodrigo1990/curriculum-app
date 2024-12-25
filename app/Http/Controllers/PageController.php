<?php

namespace App\Http\Controllers;

use App\Http\Resources\StdResource;
use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function __construct(private PageService $pageService)
    {
    }

    public function get(Request $request){
        try {
            $page = $this->pageService->get($request->page_id);
            return new StdResource($page);
        }catch(\Throwable $e){
            if($this->getNotFoundConditional($e))
                throw new \Exception('Page not found');
        }
    }
}
