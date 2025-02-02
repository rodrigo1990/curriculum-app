<?php

namespace App\ModelDtos;

use Illuminate\Database\Eloquent\Collection;
use Spatie\LaravelData\Data;

class UsersDto extends Data
{
    public Collection $users;
}