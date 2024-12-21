<?php

namespace App\ModelDtos;

use App\Models\Body;
use App\Models\Button;
use App\Models\ButtonBody;
use App\Models\Mongo\ButtonsStyles;
use App\Models\Header;
use Carbon\Carbon;
use Spatie\LaravelData\Data;

class ButtonDto extends Data
{
    public function __construct(
        public Button        $button,
        public int           $parent_id,
        public string        $class,
        public ButtonsStyles $styles,

    ) {
    }
}