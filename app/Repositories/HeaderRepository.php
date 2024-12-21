<?php

namespace App\Repositories;

use App\Models\Header;

class HeaderRepository
{
    public function getHeaderBySiteId(int $siteId):Header
    {
        return Header::where('site_id',$siteId)->first();
    }
}