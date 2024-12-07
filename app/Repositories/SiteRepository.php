<?php

namespace App\Repositories;

use App\Models\Site;

class SiteRepository
{
    public function getSite(){
        return Site::find(1);
    }
}