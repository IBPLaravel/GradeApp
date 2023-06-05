<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function view(){
        return view('admin.announcement.add');
    }
    public function insert(Request $request){
    $post = new Announcement;
    $post->title = trim($request->title);
    $post->content = trim($request->content);
    $post->save();

    return redirect('admin/admin/list')->with('success',"Announcement created succesfully");
    }

    // public function getAllAnnouncement(){
    //     $data['getAnons'] = Announcement::getAnnouncement();
    //     return view('admin.announcement.list',$data);
    // }

}
