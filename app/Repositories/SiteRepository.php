<?php

namespace App\Repositories;

use App\Models\Site;

class SiteRepository
{
    public function getSite(int $id){
        return Site::find($id);
    }

    public function getSiteByUser(string $user){
        return Site::where('user_id', $user->id)->first();
    }
}