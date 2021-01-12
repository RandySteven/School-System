<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Major;
use App\Models\Subject;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function show(Major $major){
        $subjects = Subject::where('major_id', $major->id)->get();
        return view('subject.index', compact('subjects'));
    }

    public function classroom(Major $major){
        $classrooms = Classroom::whre('major_id', $major->id)->get();
        return view('class.index', compact('classrooms'));
    }
}
