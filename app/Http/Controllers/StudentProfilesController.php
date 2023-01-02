<?php

namespace App\Http\Controllers;
use App\Models\StudentProfile;
use Illuminate\Http\Request;

class StudentProfilesController extends Controller
{
    function primary(){
        return view ('Studentprofile');
    } 
}
