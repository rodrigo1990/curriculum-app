<?php

namespace App\Repositories;

use App\Models\ButtonsBody;

class ButtonsRepository
{
    public function getBodyButtonsByBodyId(int $bodyId){
        return ButtonsBody::where('body_id', $bodyId)->get();
    }
}