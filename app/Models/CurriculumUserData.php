<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumUserData extends Model
{
    use HasFactory;

    protected $table = 'curriculum_users_data';

    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'email',
        'telephone',
        'profile_picture',
        'site_id',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}