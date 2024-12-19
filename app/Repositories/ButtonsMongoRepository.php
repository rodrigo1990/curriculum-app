<?php

namespace App\Repositories;

use App\Models\ButtonsBody;
use App\Models\Mongo\ButtonsStyles;

class ButtonsMongoRepository
{
    public function getButtonById(int $id): ButtonsStyles{
        return ButtonsStyles::where('id', $id)->first();
    }
}