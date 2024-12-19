<?php

namespace App\Repositories;

use App\Interfaces\SiteRepositoryInterface;
use App\Models\BodyStyles;

class BodyMongoRepository implements SiteRepositoryInterface
{
    public function getSite(int $id){
        return BodyStyles::where('id', $id)->first();
    }
}