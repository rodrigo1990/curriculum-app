<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ButtonsHeader extends Model
{
    use HasFactory;

    protected $table = 'buttons_header';

    public function button(){
        return $this->belongsTo(Buttons::class,'button_id');
    }

    public function header(){
        return $this->belongsTo(Header::class);
    }
}
