<?php

namespace App\Repositories;

use App\Models\ButtonBody;
use App\Models\Mongo\ButtonsStylesMongo;

class ButtonsMongoRepository
{
    public function getButtonById(int $id): ButtonsStylesMongo{
        return ButtonsStylesMongo::where('id', $id)->first();
    }
}