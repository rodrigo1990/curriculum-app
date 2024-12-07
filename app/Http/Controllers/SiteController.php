<?php

namespace App\Http\Controllers;

use App\Http\Resources\StdResource;
use App\Models\SiteStyles;
use App\Services\SiteService;
use Illuminate\Http\Request;


class SiteController extends Controller
{
    public function __construct(private SiteService $siteService)
    {
    }

    public function getSite()
    {
        $site = $this->siteService->getSite();
        if($site)
            return new StdResource($site);
        else
            throw new \Exception('Site not found');
    }
}
