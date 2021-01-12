<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Forum;
use App\Models\Level;
use App\Models\Major;
use App\Models\Subject;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function landing(){

    }

    public function index(){
        $forums = Forum::all();
        $subjects = Subject::get();
        return view('forum.index', compact('forums', 'subjects'));
    }

    public function create(){
        $majors = Major::get();
        $levels = Level::get();
        $subjects = Subject::get();
        $classrooms = Classroom::get();
        return view('forum.create', compact('majors', 'levels', 'subjects', 'classrooms'));
    }

    public function store(Request $request){
        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->title);
        $attr['major_id'] = $request->get('major_id');
        $attr['level_id'] = $request->get('level_id');
        $attr['classroom_id'] = $request->get('classroom_id');
        $attr['subject_id'] = $request->get('subject_id');
        auth()->user()->forums()->create($attr);
        return redirect('forums')->with('success', 'Create forum success');
    }

    public function show(Forum $forum){
        return view('forum.show', compact('forum'));
    }
}
