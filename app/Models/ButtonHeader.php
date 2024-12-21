<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ButtonHeader extends Model
{
    use HasFactory;

    protected $table = 'buttons_header';

    public function button(){
        return $this->belongsTo(Button::class,'button_id');
    }

    public function header(){
        return $this->belongsTo(Header::class);
    }
}
