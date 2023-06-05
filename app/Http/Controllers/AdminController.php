<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;


class AdminController extends Controller
{
public function getStudent(){
    // $data['header_title']="Admin Panel";
    $data['getAllStudent'] = User::getAllStudent();
    return view('admin.admin.student',$data);
}

public function getTeacher(){
    $data['getAllTeacher'] = User::getAllTeacher();
    return view('admin.admin.teacher',$data);
}

public function addStudent(){
    $data['header_title'] = "Add New Student";
    return view('student.add',$data);
}

public function addTeacher(){
    $data['header_title'] = "Add New Teacher";
    return view('teacher.add',$data);
}

public function insertStudent(Request $request){
    //dd($request->all());

    $user = new User;
    $user->name = trim($request->name);
    $user->email = trim($request->email);
    $user->password = Hash::make($request->password);
    $user->user_type=3;
    $user->save();

    return redirect('admin/admin/student')->with('success',"Student created succesfully");
}

public function insertTeacher(Request $request){
    //dd($request->all());

    $user = new User;
    $user->name = trim($request->name);
    $user->email = trim($request->email);
    $user->password = Hash::make($request->password);
    $user->user_type=2;
    $user->save();

    return redirect('admin/admin/teacher')->with('success',"Student created succesfully");
}

public function editStudent($id){
    $data['getRecord']=User::getStudentSingle($id);
    if(!empty($data['getRecord'])){
        $data['header_title'] = "Edit Student";
        return view('admin/admin/student/edit',$data);
    }
    else{
        abort(404);
    }
}

public function editTeacher($id){
    $data['getRecord']=User::getTeacherSingle($id);
    if(!empty($data['getRecord'])){
        $data['header_title'] = "Edit Teacher";
        return view('admin/admin/teacher/edit',$data);
    }
    else{
        abort(404);
    }
}
public function deleteStudent($id){
    $user = User::getStudentSingle($id);
    $user->is_delete=1;
    $user->save();

    return redirect('admin/admin/student')->with('delete',"Student deleted succesfully");

}

public function deleteTeacher($id){
    $user = User::getTeacherSingle($id);
    $user->is_delete=1;
    $user->save();

    return redirect('admin/admin/teacher')->with('delete',"Teacher deleted succesfully");

}

public function updateStudent($id, Request $request){

    $user = User::getStudentSingle($id);
    $user->name = trim($request->name);
    $user->email = trim($request->email);
    if(!empty($request->password)){
        $user->password = Hash::make($request->password);

    }
    $user->save();

    return redirect('admin/admin/student')->with('update',"Student updated succesfully");
}

public function updateTeacher($id, Request $request){

    $user = User::getTeacherSingle($id);
    $user->name = trim($request->name);
    $user->email = trim($request->email);
    if(!empty($request->password)){
        $user->password = Hash::make($request->password);

    }
    $user->save();

    return redirect('admin/admin/teacher')->with('update',"Teacher updated succesfully");
}


}
