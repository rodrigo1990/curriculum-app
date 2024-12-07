<?php

namespace App\Http\Controllers;

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
        return view('site_styles', ['site' => $site]);
    }
}
