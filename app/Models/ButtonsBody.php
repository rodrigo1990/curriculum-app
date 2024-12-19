<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ButtonsBody extends Model
{
    use HasFactory;

    protected $table = 'buttons_body';

    public function button(){
        return $this->belongsTo(Buttons::class,'button_id');
    }

    public function body(){
        return $this->belongsTo(Body::class);
    }
}
