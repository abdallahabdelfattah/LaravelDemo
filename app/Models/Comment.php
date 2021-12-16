<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ["student_id", "comment"];


        /**
     * Get the Student  that owns the comment.
     */
    public function student()
    {
        return $this->belongsTo(student::class);
    }


}
