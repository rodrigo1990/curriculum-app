<?php

namespace App\Services;

use App\ModelDtos\PageDto;
use App\Models\Page;
use App\Repositories\PageRepository;

class PageService
{
    function __construct(
        private PageRepository $pageRepository,
        private ContentService $contentService
    )
    {
    }

    public function get(int $id):PageDto
    {
        $page = $this->pageRepository->get($id);
        $content = $this->contentService->getByPageId($id);

        $pageDto = new PageDto();
        $pageDto->page = $page;
        $pageDto->content = $content;

        return $pageDto;

    }

}