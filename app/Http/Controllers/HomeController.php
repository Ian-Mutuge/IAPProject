<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index(){
    $role=Auth::user()->role;

    if($role=='1')
    {
        return view('staff');
    }

    if($role=='2')
    {
        return view('lecturer');
    }
    else
    {
        return view('dashboard');
    }
}

}
