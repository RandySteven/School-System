<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function show(){
        $books = Book::take(8)->get();
        return view('library.index', compact('books'));
    }
}
