<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\ExtracurricularUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserExtracurricularController extends Controller
{
    public function store(Request $request){
        $user = Auth::user();
        $user->extracurriculars()->attach($request->get('extracurricular_id'));
        return back();
    }
}
