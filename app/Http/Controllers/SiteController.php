<?php

namespace App\Http\Controllers;

use App\Http\Resources\StdResource;
use App\Interfaces\SiteServiceInterface;
use App\Models\Mongo\BodyStyles;
use App\Services\SiteService;
use Illuminate\Http\Request;


class SiteController extends Controller
{
    public function __construct(private SiteService $siteService)
    {
    }

    public function getSite(Request $request)
    {
        try {
            $site = $this->siteService->getSite($request->id);
            return new StdResource($site);
        }catch (\Throwable $e){
            if($this->getNotFoundConditional($e))
                throw new \Exception('Site not found');
        }
    }


    public function getSiteByUser(Request $request)
    {
        try {
            $site = $this->siteService->getSiteByUser($request->username);
            if ($site)
                return new StdResource($site);
        }catch (\Throwable $e){
            if($this->getNotFoundConditional($e))
                throw new \Exception('Site not found');
            else
                throw new \Exception($e->getMessage());
        }
    }
}
