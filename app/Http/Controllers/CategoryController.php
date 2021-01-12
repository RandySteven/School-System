<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category){
        $books = $category->books()->where('category_id', $category->id)->latest()->paginate(10);
        return view('library.book.index', compact('books'));
    }
}
