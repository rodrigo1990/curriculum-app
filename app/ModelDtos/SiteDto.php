<?php

namespace App\ModelDtos;

use App\Models\Body;
use App\Models\Header;
use App\Models\Site;
use App\Models\Mongo\BodyStyles;
use App\Models\User;
use Carbon\Carbon;
use Spatie\LaravelData\Data;

class SiteDto extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public string $profile_image,
        public string $logo,
        public int $userId,
        public Carbon $createdAt,
        public Carbon $updatedAt,
        public Body $body,
        public HeaderDto $header,

    ) {
    }
}