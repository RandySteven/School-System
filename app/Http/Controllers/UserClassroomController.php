<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\ClassroomUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserClassroomController extends Controller
{
    public function create(){
        $users = User::get();
        $classrooms = Classroom::get();
        return view('admin.classroom.create', compact('users', 'classrooms'));
    }

    public function store(Request $request){
        $user = User::find($request->get('user_id'));
        if($user==$request->get('user_id')){
            return back()->with('error', 'User has his/her classroom');
        }
        $user->classrooms()->attach($request->get('classroom_id'));
        return redirect('/dashboard')->with('success', 'Success add student to class');
    }

    public function delete(User $user){
        return back();
    }
}
