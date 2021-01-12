<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Level;
use App\Models\Major;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index(){
        $classrooms = Classroom::all();
        return view('class.index', compact('classrooms'));
    }

    public function create(){
        $levels = Level::get();
        $majors = Major::get();
        return view('class.create', compact('levels', 'majors'));
    }

    public function store(Request $request){
        $attr = $request->all();
        $attr['class'] = $request->class;
        $attr['level_id'] = $request->get('level_id');
        $attr['major_id'] = $request->get('major_id');
        $name = (string)$attr['major_id']."-".(string)$attr['level_id']."-".$attr['class'];
        $duplicate = Classroom::where('slug', $name)->first();
        if($duplicate){
            return back()->with('error', 'Class already created');
        }else{
            $attr['slug'] = \Str::slug($name);
            Classroom::create($attr);
            return redirect('/classrooms')->with('success', 'Class created success');
        }
    }

    public function show(Classroom $classroom){
        return view('class.show', compact('classroom'));
    }

    public function delete(Classroom $classroom){
        $classroom->delete();
        return back()->with('success', 'Class deleted success');
    }
}
