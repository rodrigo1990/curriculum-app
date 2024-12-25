<?php

namespace App\Repositories;

use App\ModelDtos\SiteDto;
use App\Models\Site;

class SiteRepository
{
    public function getSite(int $id):Site
    {
        return Site::find($id);
    }

    public function getSiteByUserId(int $userId):Site
    {
        return Site::where('user_id', $userId)->with(['body','header'])->first();
    }
}