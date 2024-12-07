<?php
namespace App\Services;
use App\Interfaces\SiteServiceInterface;
use App\Repositories\SiteMongoRepository;
use App\Repositories\SiteRepository;

class SiteService implements SiteServiceInterface {

    function __construct(private SiteRepository $siteRepository, private SiteMongoRepository $siteMongoRepository)
    {
    }

    public function getSite(int $id){
        $site =  $this->siteRepository->getSite($id);
        $styles = $this->siteMongoRepository->getSiteMongo($id);
        $site->styles = $styles;
        return $site;
    }
}