<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buttons extends Model
{
    use HasFactory;

    public function buttonBody(){
        return $this->hasOne(ButtonsBody::class);
    }
}
