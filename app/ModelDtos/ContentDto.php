<?php

namespace App\ModelDtos;

use App\Models\Content;
use App\Models\Mongo\ContentMongo;
use Spatie\LaravelData\Data;

class ContentDto extends Data
{
    public Content $content;
    public ContentMongo $contentMongo;
}