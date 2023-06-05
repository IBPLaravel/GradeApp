<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lecture;

class LectureController extends Controller
{
    public function show(){
        $users = User::getAllStudent();
        
        $select = Lecture::with('user')->find('user_id');

        return view('admin/admin/lecture/show',compact('users','select'));
            
        
    }  
}
