<?php

namespace App\ModelDtos;

use App\Models\Mongo\ContentMongo;
use App\Models\Page;
use Spatie\LaravelData\Data;

class PageDto extends Data
{
    public Page $page;
    public ContentDto $content;
}