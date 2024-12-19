<?php

namespace App\Repositories;

use App\Models\ButtonsBody;
use App\Models\ButtonsStyles;

class ButtonsBodyMongoRepository
{
    public function getButtonBody(int $bodyId): ButtonsStyles{
        return ButtonsStyles::where('id', $bodyId)->first();
    }
}