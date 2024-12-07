<?php

namespace App\Repositories;

use App\Models\SiteStyles;

class SiteMongoRepository
{
    public function getSiteMongo(int $id){
        return SiteStyles::where('id', $id)->first();
    }
}