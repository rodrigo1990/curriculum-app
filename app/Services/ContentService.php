<?php

namespace App\Services;

use App\ModelDtos\ContentDto;
use App\Repositories\ContentMongoRepository;
use App\Repositories\ContentRepository;

class ContentService
{
    function __construct(
        private ContentRepository $contentRepository,
        private ContentMongoRepository $contentMongoRepository
    )
    {
    }

    public function getByPageId(int $pageId): ContentDto
    {
        $content = $this->contentRepository->get($pageId);
        $contentMongo = $this->contentMongoRepository->get($pageId);

        $contentDto = new ContentDto();
        $contentDto->content = $content;
        $contentDto->contentMongo = $contentMongo;

        return $contentDto;


    }
}