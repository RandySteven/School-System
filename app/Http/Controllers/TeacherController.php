<?php

namespace App\Http\Controllers;

use App\Models\Degrees;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function add(){
        $degrees = Degrees::get();
        $subjects = Subject::get();
        return view('admin.teacher.add', compact('degrees', 'subjects'));
    }

    public function store(Request $request){
        $user = Auth::user();
        $user->degrees()->attach($request->get('degrees'));
        $user->subjects()->attach($request->get('subjects'));

        User::where('id', $user->id)->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'photo' => $request->file('photo') ? $request->file('photo')->store("images/teacher") : null
        ]);
        return redirect('/teachers');
    }

    public function edit(User $user){
        $degrees = Degrees::get();
        $subjects = Subject::get();
        return view('teacher.edit', compact('user', 'degrees', 'subjects'));
    }

    public function update(Request $request, User $user){
        $user->degrees()->attach($request->get('degrees'));
        $user->subjects()->attach($request->get('subjects'));
        if($request->file('photo')){
            \Storage::delete($user->photo);
            $photo = $request->file('photo')->store("images/teacher");
        }else{
            $photo = $user->photo;
        }
        $user->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'photo' => $photo,
        ]);
        return redirect('/')->with('success', 'Edit teacher success');
    }

    public function delete(User $user){
        $user->delete($user);
        return back()->with('success', 'Delete teacher success');
    }
}
