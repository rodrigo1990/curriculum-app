<?php

namespace App\Services;

use App\ModelDtos\ButtonDto;
use App\Models\Body;
use App\Models\ButtonsBody;
use App\Models\Header;
use App\Models\Mongo\ButtonsStyles;
use App\Repositories\ButtonsMongoRepository;
use App\Repositories\ButtonsRepository;
use Illuminate\Database\Eloquent\Collection;

class ButtonsService
{
    function __construct(
        private ButtonsRepository      $buttonsRepository,
        private ButtonsMongoRepository $buttonsMongoRepository,

    )
    {
    }

    public function getButtonsBodyByBody(Body $body): Collection{
        $buttonsBody = $this->buttonsRepository->getBodyButtons($body->id);
        $buttonsBodyCollection = new Collection();
        foreach($buttonsBody as $button){
            $styles = $this->buttonsMongoRepository->getButtonById($button->button_id);
            $buttonBodyDto = new ButtonDto($button->button()->first(), $button->body_id, $styles->class, $styles);
            $buttonsBodyCollection->push($buttonBodyDto);
            unset($buttonBodyDto->styles->class);
        }
        return $buttonsBodyCollection;
    }

    public function getButtonsHeaderByHeader(Header $header): Collection{
        $buttonsBody = $this->buttonsRepository->getHeaderButtons($header->id);
        $buttonsBodyCollection = new Collection();
        foreach($buttonsBody as $button){
            $styles = $this->buttonsMongoRepository->getButtonById($button->button_id);
            $buttonBodyDto = new ButtonDto($button->button()->first(), $button->header_id, $styles->class, $styles);
            $buttonsBodyCollection->push($buttonBodyDto);
            unset($buttonBodyDto->styles->class);
        }
        return $buttonsBodyCollection;
    }
}