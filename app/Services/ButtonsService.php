<?php

namespace App\Services;

use App\ModelDtos\ButtonDto;
use App\Models\Body;
use App\Models\ButtonBody;
use App\Models\Header;
use App\Models\Mongo\ButtonsStylesMongo;
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
        foreach($buttonsBody as $buttonBody){
            $button = $buttonBody->button()->first();
            $button->slug = $button->page()->first()->slug;
            $styles = $this->buttonsMongoRepository->getButtonById($buttonBody->button_id);
            $buttonBodyDto = new ButtonDto($button, $buttonBody->body_id, $styles->class, $styles);
            $buttonsBodyCollection->push($buttonBodyDto);
            unset($buttonBodyDto->styles->class);
        }
        return $buttonsBodyCollection;
    }

    public function getButtonsHeaderByHeader(Header $header): Collection{
        $buttonsBody = $this->buttonsRepository->getHeaderButtons($header->id);
        $buttonsBodyCollection = new Collection();
        foreach($buttonsBody as $buttonHeader){
            $button = $buttonHeader->button()->first();
            $button->slug = $button->page()->first()->slug;
            $styles = $this->buttonsMongoRepository->getButtonById($buttonHeader->button_id);
            $buttonBodyDto = new ButtonDto($button, $buttonHeader->header_id, $styles->class, $styles);
            $buttonsBodyCollection->push($buttonBodyDto);
            unset($buttonBodyDto->styles->class);
        }
        return $buttonsBodyCollection;
    }
}