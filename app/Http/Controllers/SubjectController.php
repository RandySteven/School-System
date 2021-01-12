<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Major;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return view('subject.index', compact('subjects'));
    }

    public function create(){
        $majors = Major::get();
        $levels = Level::get();
        return view('subject.create', compact('majors', 'levels'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:5|max:50',
            'thumbnail' => 'image|mimes:png,jpg,jpeg|max:2048',
            'desc' => 'required'
        ]);
        $attr = $request->all();
        $attr['major_id'] = $request->get('major_id');
        $attr['level_id'] = $request->get('level_id');
        $attr['thumbnail'] = $request->file('thumbnail')->store("images/subject");
        $attr['slug'] = \Str::slug($request->name);
        Subject::create($attr);
        return redirect('/subjects');
    }

    public function update(Request $request, Level $level){
        $attr = $request->all();
        $attr['major_id'] = $request->get('major_id');
        $attr['level_id'] = $request->get('level_id');
        $attr['thumbnail'] = $request->file('thumbnail')->store("images/subject");
        $attr['slug'] = \Str::slug($request->name);
        $level->update($attr);
        return redirect('/subjects');
    }

    public function show(Subject $subject){
        return view('subject.show', compact('subject'));
    }

    public function delete(Subject $subject){
        $subject->delete();
        \Storage::delete($subject->thumbnail);
        return back();
    }
}
