<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function body(){
        return $this->hasOne(Body::class);
    }

    public function header(){
        return $this->hasOne(Header::class);
    }

    public function pages(){
        return $this->hasMany(Page::class);
    }
}
