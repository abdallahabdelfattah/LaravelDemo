<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Company;
use App\Models\Student;
use Illuminate\Http\Request;

class SiteController extends Controller
{
 
    public function getComments($student_id)
    {
       
        // Passing post id into find()
        $student=  Student::find($student_id); 
        $comments=[]; 
        if( $student)
        {
            $comments= $student->comments; 
        }
        return view('students.Studentcomments',compact('comments',"student_id"));
    }

    public function getStudent($comment_id)
    {
        // Passing comment id into find()
        return Comment::find($comment_id)->student;
    }


    
    


}
