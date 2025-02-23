<?php

namespace App\ModelDtos;

use App\Models\Body;
use App\Models\Header;
use App\Models\Site;
use App\Models\Mongo\BodyStylesMongo;
use App\Models\User;
use Carbon\Carbon;
use Spatie\LaravelData\Data;

class SiteDto extends Data
{
    public Site $site;

}