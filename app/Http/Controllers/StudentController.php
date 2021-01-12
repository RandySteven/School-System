<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Major;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function add(){
        $majors = Major::get();
        return view('admin.student.add', compact('majors'));
    }

    public function store(Request $request){
        $request->validate([
            'photo' => 'image|mimes:png,jpg,jpeg|nullable',
        ]);
        $user = Auth::user();
        User::where('id', $user->id)->update([
            'photo' => $request->file('photo')->store("images/student"),
            'parent_phone' => $request->parent_phone,
            'parent_name' => $request->parent_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'major_id' => $request->get('major_id')
        ]);
        return redirect('/dashboard');
    }

}
