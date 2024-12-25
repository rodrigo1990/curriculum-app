<?php

namespace App\Repositories;

use App\Interfaces\SiteRepositoryInterface;
use App\Models\Mongo\BodyStylesMongo;

class BodyMongoRepository implements SiteRepositoryInterface
{
    public function getBody(int $id):BodyStylesMongo
    {
        return BodyStylesMongo::where('id', $id)->first();
    }
}