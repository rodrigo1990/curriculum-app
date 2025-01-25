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

    public function getPageAndContent(string $pageSlug, string $username):PageDto
    {
        $page = $this->pageRepository->getBySlugUsername($pageSlug, $username);
        return $this->getPageContent($page);
    }

    public function getDefaultPageAndContent(string $username):PageDto
    {
        $page = $this->pageRepository->getDefault($username);
        return $this->getPageContent($page);
    }

    protected function getPageContent(Page $page):PageDto
    {
        $content = $this->contentService->getByPageId($page->id);
        $page->content->content = $content;
        $pageDto = new PageDto();
        $pageDto->page = $page;

        return $pageDto;
    }

}