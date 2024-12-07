<?php
namespace App\Services;
use App\Interfaces\SiteServiceInterface;

class SiteService implements SiteServiceInterface {

    function __construct(private \App\Repositories\SiteRepository $siteRepository)
    {
    }

    public function getSite(){
        return $this->siteRepository->getSite();
    }
}