<?php

namespace App\Repositories;

use App\Models\ButtonsBody;
use App\Models\Mongo\ButtonsStyles;

class ButtonsMongoRepository
{
    public function getButtonBodyByBodyId(int $bodyId): ButtonsStyles{
        return ButtonsStyles::where('id', $bodyId)->first();
    }
}