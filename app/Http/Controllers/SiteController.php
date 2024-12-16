<?php

namespace App\Http\Controllers;

use App\Http\Resources\StdResource;
use App\Interfaces\SiteServiceInterface;
use App\Models\BodyStyles;
use App\Services\SiteService;
use Illuminate\Http\Request;


class SiteController extends Controller
{
    public function __construct(private SiteService $siteService)
    {
    }

    public function getSite(Request $request)
    {
        $site = $this->siteService->getSite($request->id);
        if($site)
            return new StdResource($site);
        else
            throw new \Exception('Site not found');
    }


    public function getSiteByUser(Request $request)
    {
        $site = $this->siteService->getSiteByUser($request->username);
        if($site)
            return new StdResource($site);
        else
            throw new \Exception('Site not found');
    }
}
