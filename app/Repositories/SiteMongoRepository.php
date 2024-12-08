<?php

namespace App\Repositories;

use App\Interfaces\SiteRepositoryInterface;
use App\Models\SiteStyles;

class SiteMongoRepository implements SiteRepositoryInterface
{
    public function getSite(int $id){
        return SiteStyles::where('id', $id)->first();
    }
}