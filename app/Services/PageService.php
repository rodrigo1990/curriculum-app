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

    public function getPageAndContent(int $id, string $username):PageDto
    {
        $page = $this->pageRepository->getByIdUsername($id, $username);
        $content = $this->contentService->getByPageId($id);

        $page->content->content = $content;
        $pageDto = new PageDto();
        $pageDto->page = $page;

        return $pageDto;

    }

}