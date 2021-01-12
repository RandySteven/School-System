<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSubjectController extends Controller
{
    public function createStudent(){
        $users = User::get();
        $subjects = Subject::get();
        return view('admin.subject.student.create', compact('users','subjects'));
    }

    public function createTeacher(){
        $users = User::get();
        $subjects = Subject::get();
        return view('admin.subject.teacher.create', compact('users','subjects'));
    }

    public function store(Request $request){
        $user = User::where('id', $request->get('user_id'))->first();
        $user->subjects()->attach($request->get('subjects'));
        return redirect('/dashboard')->with('success', 'Student has their subject');
    }

    public function subjects(){
        $user = Auth::user();
        $subjects = $user->subjects();
        return view('subject.student.subjects', compact('user', 'subjects'));
    }
}
