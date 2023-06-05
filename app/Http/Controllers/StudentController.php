<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class StudentController extends Controller
{
    public function getStudent(){
        $user = Auth::user();
        return view('student.dashboard',compact('user'));
    }

}
