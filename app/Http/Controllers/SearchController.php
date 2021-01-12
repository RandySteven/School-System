<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Subject;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function forum(Request $request){
        $subjects = Subject::get();
        $forums = Forum::where('subject_id', $request->subject_id)->get();
        return view('forum.index', compact('forums', 'subjects'));
    }
}
