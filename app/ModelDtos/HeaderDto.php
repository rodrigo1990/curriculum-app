<?php

namespace App\ModelDtos;

use App\Models\Header;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;

class HeaderDto extends Data
{
    public Header $header;
}