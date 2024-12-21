<?php

namespace App\Services;

use App\ModelDtos\HeaderDto;
use App\Repositories\ButtonsMongoRepository;
use App\Repositories\ButtonsRepository;
use App\Repositories\HeaderRepository;

class HeaderService
{
    public function __construct(
        private HeaderRepository $headerRepository,
        private ButtonsService  $buttonsService,
    )
    {
    }

    public function getHeaderBySiteId(int $siteId): HeaderDto{
        $headerDto = new HeaderDto();
        $header = $this->headerRepository->getHeaderBySiteId($siteId);
        $buttons = $this->buttonsService->getButtonsHeaderByHeader($header);
        $header->buttons = $buttons;
        $headerDto->header = $header;
        return $headerDto;
    }
}