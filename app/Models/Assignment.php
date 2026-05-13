<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'title',
        'course_id',
        'deadline',
        'total_marks'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
