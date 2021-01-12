<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::latest()->paginate(10);
        return view('library.book.index', compact('books'));
    }

    public function writter(Book $book){
        $books = Book::where('writter_name', $book->writter_name)->latest()->paginate(10);
        return view('library.book.index', compact('books'));
    }

    public function create(){
        $categories = Category::get();
        return view('library.book.create', compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'book_file' => 'file|mimes:docx,pdf,xlsx,ppt',
            'thumbnail' => 'image|mimes:png,jpg,jpeg|max:2048'
        ]);
        $attr = $request->all();
        $attr['slug'] = \Str::slug($request->title);
        $attr['category_id'] = $request->get('category_id');
        if($request->pages<50){
            return back()->with('error', 'Pages must not less than 50');
        }
        $attr['thumbnail'] = $request->file('thumbnail')->store("images/books");
        $attr['book_file'] = $request->file('book_file')->store("book-file");
        Book::create($attr);
        return redirect('/libraries/books')->with('success', 'Add Book Success');
    }

    public function show(Book $book){
        return view('library.book.show', compact('book'));
    }

    public function delete(Book $book){
        $book->delete();
        \Storage::delete($book->thumbnail);
        return back()->with('success', 'Delete book success');
    }
}
