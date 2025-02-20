<?php

namespace App\Services\Admin;

use App\Repositories\CurriculumPersonalDataRepository;

class CurriculumPersonalDataService
{
    function __construct(private CurriculumPersonalDataRepository $curriculumPersonalDataRepository)
    {
    }

    public function create(string $name, string $surname, string $email, string $telephone, ?string $birthday): void
    {
//        $this->siteService->createSite('My First CV','default.webp','default.png', $email, auth()->user()->id);
        $this->curriculumPersonalDataRepository->create($name, $surname, $email, $telephone, date('d-m-y H:i:s',strtotime($birthday)));
    }
}