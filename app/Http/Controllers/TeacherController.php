<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class TeacherController extends Controller
{
    public function getTeacher(){
        $user = Auth::user();
        return view('teacher.dashboard',compact('user'));
    }

    public function changePassword($id){
        $data['getRecord']=User::getTeacherSingle($id);
            $data['header_title'] = "Edit Teacher";
            return view('teacher.edit',$data);
    }
}
