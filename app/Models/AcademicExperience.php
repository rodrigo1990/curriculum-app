<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicExperience extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'institution',
        'career',
    ];

    public function experience(){
        return $this->belongsTo(Experience::class);
    }
}