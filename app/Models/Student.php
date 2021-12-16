<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    


    protected $fillable =['Name', 'description','Date'];

      /**
     * Get the comments for the blog student .
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}
