<?php

namespace App\Repositories;

use App\Models\Button;
use App\Models\ButtonBody;
use App\Models\ButtonHeader;

class ButtonsRepository
{
    public function getBodyButtons(int $bodyId):ButtonBody
    {
        return ButtonBody::where('body_id', $bodyId)->with('button')->get();
    }

    public function getHeaderButtons(int $headerId):ButtonHeader
    {
        return ButtonHeader::where('header_id', $headerId)->with('button')->get();
    }
}