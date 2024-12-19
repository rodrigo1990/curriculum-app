<?php

namespace App\Services;

use App\Models\Body;
use App\Models\ButtonsBody;
use App\Models\ButtonsBodyStyles;
use App\Repositories\ButtonsRepository;
use Illuminate\Database\Eloquent\Collection;

class ButtonsBodyService
{
    function __construct(
        private ButtonsRepository   $buttonsRepository,

    )
    {
    }

    public function getButtonsBody(Body $body): Collection{
        $buttonsBody = $this->buttonsRepository->getBodyButtons($body->id);
        return $buttonsBody;
    }


}