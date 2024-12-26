<?php

namespace App\Repositories;

use App\Models\Page;

class PageRepository
{
    public function getByIdUsername(int $pageId, string $username): Page
    {
        return Page::with(['content'])
            ->join('bodies','pages.body_id','=','bodies.id')
            ->join('sites','bodies.site_id','=','sites.id')
            ->join('users','sites.user_id','=','users.id')
            ->where('pages.id',$pageId)
            ->where('users.username',$username)
            ->first();
    }
}