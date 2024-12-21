<?php

namespace App\ModelDtos;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;

class HeaderDto extends Data
{
    public function __construct(
        public int $id,
        public int $site_id,
        public Carbon $createdAt,
        public Carbon $updatedAt,
        public Collection $buttons
    ) {
    }
}