<?php

namespace App\Services;

use App\ModelDtos\ButtonBodyDto;
use App\Models\Body;
use App\Models\ButtonsBody;
use App\Models\ButtonsBodyStyles;
use App\Repositories\ButtonsBodyMongoRepository;
use App\Repositories\ButtonsRepository;
use Illuminate\Database\Eloquent\Collection;

class ButtonsBodyService
{
    function __construct(
        private ButtonsRepository   $buttonsRepository,
        private ButtonsBodyMongoRepository $buttonsBodyMongoRepository,

    )
    {
    }

    public function getButtonsBody(Body $body): Collection{
        $buttonsBody = $this->buttonsRepository->getBodyButtons($body->id);
        $buttonsBodyCollection = new Collection();
        foreach($buttonsBody as $button){
            $styles = $this->buttonsBodyMongoRepository->getButtonBody($button->button_id);
            $buttonBodyDto = new ButtonBodyDto($button->button()->first(), $button->body_id, $styles->class, $styles);
            $buttonsBodyCollection->push($buttonBodyDto);
            unset($buttonBodyDto->styles->class);
        }
        return $buttonsBodyCollection;
    }


}