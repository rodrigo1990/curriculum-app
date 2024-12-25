<?php

namespace App\Services;

use App\Models\Page;
use App\Repositories\PageRepository;

class PageService
{
    function __construct(private PageRepository $pageRepository)
    {
    }

    public function get(int $id):Page
    {
        return $this->pageRepository->get($id);
    }

}