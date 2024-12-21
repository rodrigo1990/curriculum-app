<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    use HasFactory;

    public function buttonBody(){
        return $this->hasOne(ButtonBody::class);
    }

    public function buttonHeader(){
        return $this->hasOne(ButtonHeader::class);
    }

    public function page(){
        return $this->belongsTo(Page::class);
    }
}
