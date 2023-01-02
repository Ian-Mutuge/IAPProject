<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\StudentUnit;
use Illuminate\Support\Facades\Auth;
use App\Models\StudentUnit as ModelsStudentUnit;

class StudentUnitsController extends Controller
{
    function index() 
    { 
      
        
        $data= ModelsStudentUnit ::where('student_id',Auth::user()->id)->get();

        return view ('Attendanceview',['data'=>$data]);
    }
}
 