<?php

namespace App\Repositories;

use App\Models\ButtonsBody;
use App\Models\ButtonsBodyStyles;

class ButtonsBodyMongoRepository
{
    public function getButtonBody(int $bodyId): ButtonsBodyStyles{
        return ButtonsBodyStyles::where('id', $bodyId)->first();
    }
}