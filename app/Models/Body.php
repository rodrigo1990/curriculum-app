<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    use HasFactory;

    public function site(){
        return $this->belongsTo(Site::class);
    }

    public function buttonsBody(){
        return $this->hasMany(ButtonBody::class);
    }

    public function pages(){
        return $this->hasMany(Page::class);
    }
}
