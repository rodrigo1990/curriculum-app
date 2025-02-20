<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\CurriculumPersonalDataService;
use App\Services\SiteService;
use Illuminate\Http\Request;

class CurriculumPersonalDataController extends Controller
{
    function __construct(private CurriculumPersonalDataService $curriculumPersonalDataService, private SiteService $siteService)
    {
    }

    public function create(Request $request){
        try {
//            name: values.name,
//        surname: values.surname,
//        email: values.email,
//        telephone: values.telephone,
//        birthday: values.birthday
            $this->curriculumPersonalDataService->create(
                $request->input('name'),
                $request->input('surname'),
                $request->input('email'),
                $request->input('telephone'),
                $request->input('birthday')
            );

            return response()->json(['message' => 'Personal data created'], 201);
        }catch (\Throwable $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}