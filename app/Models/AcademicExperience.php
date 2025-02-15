<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'institution',
        'period',
        'career',
        'date_start',
        'date_end',
        'current',
        'user_id',
        'page_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}