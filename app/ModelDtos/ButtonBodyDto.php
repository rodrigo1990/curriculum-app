<?php

namespace App\ModelDtos;

use App\Models\Body;
use App\Models\Buttons;
use App\Models\ButtonsBody;
use App\Models\Mongo\ButtonsStyles;
use App\Models\Header;
use Carbon\Carbon;
use Spatie\LaravelData\Data;

class ButtonBodyDto extends Data
{
    public function __construct(
        public Buttons       $button,
        public int           $body_id,
        public string        $class,
        public ButtonsStyles $styles,

    ) {
    }
}