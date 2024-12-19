<?php
namespace App\Services;
use App\Interfaces\SiteServiceInterface;
use App\ModelDtos\SiteDto;
use App\Models\ButtonsBody;
use App\Repositories\ButtonsRepository;
use App\Repositories\BodyMongoRepository;
use App\Repositories\SiteRepository;
use App\Repositories\UserRepository;

class SiteService implements SiteServiceInterface {

    function __construct(
        private SiteRepository      $siteRepository,
        private BodyMongoRepository $bodyMongoRepository,
        private UserRepository      $userRepository,
        private ButtonsRepository   $buttonsRepository,
    )
    {
    }

    public function getSite(int $id):SiteDto
    {
        $site =  $this->siteRepository->getSite($id);
        $bodyStyles = $this->bodyMongoRepository->getSite($id);
        $site->styles = $bodyStyles;
        $site = SiteDto::from($site);
        return $site;
    }

    public function getSiteByUser(string $username):SiteDto
    {
        $user = $this->userRepository->getUserByUsername($username);
        $site = $this->siteRepository->getSiteByUserId($user->id);
        $bodyStyles = $this->bodyMongoRepository->getSite($site->id);
        $buttonsBody = $this->buttonsRepository->getBodyButtonsByBodyId($site->body->id);

        $site->body->styles = $bodyStyles;
        $site->body->buttons = $buttonsBody;

        $site = SiteDto::from($site);
        return $site;
    }
}