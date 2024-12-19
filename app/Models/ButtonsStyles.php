<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class ButtonsStyles extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'buttons_styles';

}