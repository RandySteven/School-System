<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Extracurricular;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        $classrooms = Classroom::all();
        $subjects = Subject::all();
        $extracurriculars = Extracurricular::all();
        $ia = Classroom::where('major_id', 1)->get();
        $is = Classroom::where('major_id', 2)->get();
        $iaSubjects = Subject::where('major_id', 1)->get();
        $isSubjects = Subject::where('major_id', 2)->get();
        $semuaSubjects = Subject::where('major_id', 3)->get();
        return view('admin.admin', compact('users', 'classrooms', 'subjects', 'extracurriculars', 'is', 'ia', 'iaSubjects', 'isSubjects', 'semuaSubjects'));
    }
}
