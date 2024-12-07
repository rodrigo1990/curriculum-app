<?php

namespace App\Repositories;

use App\Models\Site;

class SiteRepository
{
    public function getSite(int $id){
        return Site::find($id);
    }
}