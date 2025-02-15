<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingExperience extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'company',
        'tasks',
        'achievements',
    ];

    public function experience(){
        return $this->belongsTo(Experience::class);
    }
}