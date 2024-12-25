<?php

namespace App\Repositories;

use App\Models\Page;

class PageRepository
{
    public function get(int $pageId): Page
    {
        return Page::find($pageId);
    }
}