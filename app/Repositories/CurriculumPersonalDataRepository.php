<?php

namespace App\Repositories;

use App\Models\CurriculumUserData;

class CurriculumPersonalDataRepository
{
    public function create(string $name, string $surname, string $email, string $telephone, ?string $birthday): void
    {
        if(CurriculumUserData::where('site_id',1)->exists())
            $curriculumUserData = CurriculumUserData::where('site_id',1)->first();
        else
            $curriculumUserData = new CurriculumUserData();

        $curriculumUserData->name = $name;
        $curriculumUserData->surname = $surname;
        $curriculumUserData->email = $email;
        $curriculumUserData->telephone = $telephone;
        $curriculumUserData->birthday = $birthday;
        $curriculumUserData->site_id = 1;
        $curriculumUserData->save();
    }
}