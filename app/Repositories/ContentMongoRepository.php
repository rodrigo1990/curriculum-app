<?php

namespace App\Repositories;

use App\Models\Mongo\ContentMongo;

class ContentMongoRepository
{
    public function get(int $id):ContentMongo
    {
        return ContentMongo::where('id', $id)->first();
    }
}