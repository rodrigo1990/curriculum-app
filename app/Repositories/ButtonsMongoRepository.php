<?php

namespace App\Repositories;

use App\Models\ButtonsBody;
use App\Models\ButtonsStyles;

class ButtonsMongoRepository
{
    public function getButtonBody(int $bodyId): ButtonsStyles{
        return ButtonsStyles::where('id', $bodyId)->first();
    }
}