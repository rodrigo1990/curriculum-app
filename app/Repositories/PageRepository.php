<?php

namespace App\Repositories;

use App\Models\Page;

class PageRepository
{
    public function getBySlugUsername(string $slug, string $username): Page
    {
        return Page::with(['content'])
            ->join('bodies','pages.body_id','=','bodies.id')
            ->join('sites','bodies.site_id','=','sites.id')
            ->join('users','sites.user_id','=','users.id')
            ->where('pages.slug',$slug)
            ->where('users.username',$username)
            ->select('pages.*')
            ->first();
    }
}