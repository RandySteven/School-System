<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'material_file' => 'file|mimes:pdf,docx,ppt,pptx,xlsx',
            'thumbnail' => 'image|mimes:png,jpg,jpeg'
        ]);
        $attr = $request->all();
        $atrr['subject_id'] = $request->get('subject_id');
        $attr['material_file'] = $request->file('material_file')->store("material-file/asset");
        $attr['thumbnail'] = $request->file('thumbnail')->store("images/subject/material");
        Material::create($attr);
        $attr['slug'] = \Str::slug($request->title);
        return back();
    }

    public function show(Material $material){
        return view('subject.material.show', compact('material'));
    }

    public function download(Material $material){
        return response()->download(storage_path($material->material_file));
    }
}
