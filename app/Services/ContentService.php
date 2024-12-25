<?php

namespace App\Services;

use App\ModelDtos\ContentDto;
use App\Models\Mongo\ContentMongo;
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

    public function getByPageId(int $pageId): ContentMongo
    {
        $contentMongo = $this->contentMongoRepository->get($pageId);
        return $contentMongo;
    }
}