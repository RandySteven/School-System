<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index(){
        $extracurriculars = Extracurricular::all();
        return view('extracurriculars.index', compact('extracurriculars'));
    }

    public function create(){
        return view('extracurriculars.create');
    }

    public function store(Request $request){
        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->name);
        $attr['thumbnail'] = $request->file('thumbnail')->store("images/extracurricular");
        Extracurricular::create($attr);
        return redirect('/extracurriculars');
    }

    public function show(Extracurricular $extracurricular){
        return view('extracurriculars.show', compact('extracurricular'));
    }
}
