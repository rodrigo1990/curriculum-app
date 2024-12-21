<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ButtonBody extends Model
{
    use HasFactory;

    protected $table = 'buttons_body';

    public function button(){
        return $this->belongsTo(Button::class,'button_id');
    }

    public function body(){
        return $this->belongsTo(Body::class);
    }
}
