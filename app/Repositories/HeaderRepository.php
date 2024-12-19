<?php

namespace App\Repositories;

use App\Models\Header;

class HeaderRepository
{
    public function getHeaderById(int $headerId):Header
    {
        return Header::find($headerId);
    }
}