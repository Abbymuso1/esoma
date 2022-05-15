<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher;

use Illuminate\Support\Facades\Storage;
use App\Models\User;

class SchoolController extends Controller
{
    public function classrooms(){

        $user = 1;
        
        return view("eclassroom/school/classes/index");
    }

    public function student_management(){
        return view ("eclassroom/school/student_management");
    }
    public function teacher_management(){
        return view ("eclassroom/school/teacher_management");
    }
    
    
}
