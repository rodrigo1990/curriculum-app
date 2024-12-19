<?php

namespace App\Repositories;

use App\Models\ButtonsBody;
use App\Models\ButtonsHeader;

class ButtonsRepository
{
    public function getBodyButtons(int $bodyId){
        return ButtonsBody::where('body_id', $bodyId)->with('button')->get();
    }

    public function getHeaderButtons(int $headerId){
        return ButtonsHeader::where('header_id', $headerId)->with('button')->get();
    }
}