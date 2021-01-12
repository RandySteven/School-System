<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Subject;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function show(Level $level){
        $subjects = Subject::where('level_id', $level->id)->get();
        return view('subject.index', compact('subjects'));
    }
}
