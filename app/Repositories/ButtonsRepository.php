<?php

namespace App\Repositories;

use App\Models\Button;
use App\Models\ButtonBody;
use App\Models\ButtonHeader;
use Illuminate\Database\Eloquent\Collection;

class ButtonsRepository
{
    public function getBodyButtons(int $bodyId):Collection
    {
        return ButtonBody::where('body_id', $bodyId)->with('button')->get();
    }

    public function getHeaderButtons(int $headerId):Collection
    {
        return ButtonHeader::where('header_id', $headerId)->with('button')->get();
    }
}