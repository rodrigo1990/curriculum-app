<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class SiteStyles extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'site_styles';
}
