<?php

namespace App\Repositories;

use App\Models\Site;

class SiteRepository
{
    public function getSite(int $id){
        return Site::find($id);
    }

    public function getSiteByUserId(int $userId){
        return Site::where('user_id', $userId)->first();
    }
}