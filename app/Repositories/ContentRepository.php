<?php

namespace App\Repositories;

use App\Models\Content;

class ContentRepository
{
    public function get(int $id):Content
    {
        return Content::find($id);
    }
}