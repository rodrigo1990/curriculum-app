<?php

namespace App\Repositories;

use App\Interfaces\SiteRepositoryInterface;
use App\Models\BodyStyles;

class BodyMongoRepository implements SiteRepositoryInterface
{
    public function getBody(int $id){
        return BodyStyles::where('id', $id)->first();
    }
}