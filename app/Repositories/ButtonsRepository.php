<?php

namespace App\Repositories;

use App\Models\ButtonsBody;

class ButtonsRepository
{
    public function getBodyButtons(int $bodyId){
        return ButtonsBody::where('body_id', $bodyId)->with('button')->get();
    }
}