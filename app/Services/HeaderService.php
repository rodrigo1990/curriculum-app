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

    public function getHeaderById(int $headerId): HeaderDto{
        $header = $this->headerRepository->getHeaderById($headerId);
        $buttons = $this->buttonsService->getButtonsHeaderByHeader($header);
        $header->buttons = $buttons;
        $headerDto = HeaderDto::from($header);
        return $headerDto;
    }
}