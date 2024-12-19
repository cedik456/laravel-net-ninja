<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = ['name', 'skill', 'bio', 'course_id'];

    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
