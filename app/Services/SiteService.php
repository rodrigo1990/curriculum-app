<?php
namespace App\Services;
use App\Interfaces\SiteServiceInterface;
use App\ModelDtos\SiteDto;
use App\Repositories\SiteMongoRepository;
use App\Repositories\SiteRepository;
use App\Repositories\UserRepository;

class SiteService implements SiteServiceInterface {

    function __construct(
        private SiteRepository $siteRepository,
        private SiteMongoRepository $siteMongoRepository,
        private UserRepository $userRepository
    )
    {
    }

    public function getSite(int $id):SiteDto
    {
        $site =  $this->siteRepository->getSite($id);
        $styles = $this->siteMongoRepository->getSite($id);
        $site->styles = $styles;
        $site = SiteDto::from($site);
        return $site;
    }

    public function getSiteByUser(string $username):SiteDto
    {
        $user = $this->userRepository->getUserByUsername($username);
        $site = $this->siteRepository->getSiteByUserId($user->id);
        $styles = $this->siteMongoRepository->getSite($site->id);
        $site->styles = $styles;
        $site = SiteDto::from($site);
        return $site;
    }
}