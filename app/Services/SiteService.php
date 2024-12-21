<?php
namespace App\Services;
use App\Interfaces\SiteServiceInterface;
use App\ModelDtos\HeaderDto;
use App\ModelDtos\SiteDto;
use App\Models\ButtonBody;
use App\Repositories\ButtonsRepository;
use App\Repositories\BodyMongoRepository;
use App\Repositories\SiteRepository;
use App\Repositories\UserRepository;

class SiteService implements SiteServiceInterface {

    function __construct(
        private SiteRepository      $siteRepository,
        private BodyMongoRepository $bodyMongoRepository,
        private UserRepository      $userRepository,
        private ButtonsService      $buttonsService,
        private HeaderService       $headerService,
    )
    {
    }

    public function getSite(int $id):SiteDto
    {
        $site =  $this->siteRepository->getSite($id);
        $bodyStyles = $this->bodyMongoRepository->getBody($id);
        $site->styles = $bodyStyles;
        $site = SiteDto::from($site);
        return $site;
    }

    public function getSiteByUser(string $username):SiteDto
    {
        $user = $this->userRepository->getUserByUsername($username);
        $site = $this->siteRepository->getSiteByUserId($user->id);

        $bodyStyles = $this->bodyMongoRepository->getBody($site->id);
        $buttonsBody = $this->buttonsService->getButtonsBodyByBody($site->body);
        $buttonsHeader = $this->buttonsService->getButtonsHeaderByHeader($site->header);
        $site->body->styles = $bodyStyles;
        $site->body->buttons = $buttonsBody;
        $site->header->buttons = $buttonsHeader;
        $header = HeaderDto::from($site->header);
        $site->header = $header;
        $site = SiteDto::from($site);
        return $site;
    }
}