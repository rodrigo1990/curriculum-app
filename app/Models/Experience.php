<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    public function academicExperience(){
        return $this->hasOne(AcademicExperience::class);
    }

    public function workingExperience(){
        return $this->hasOne(WorkingExperience::class);
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
