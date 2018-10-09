<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;


class FrontController extends Controller
{
      public function index()
    {
        
        $books = Book::orderBy('id', 'DESC')->paginate(6);
        $authors = Author::orderBy('id', 'DESC')->paginate(6);
      
        return view('index',compact('books','authors'));
           
    }

   public function showBooks($id)
    {
        $book = Book::find($id);
        return view('sbook')->with('book', $book);
    }

    public function showAuthors($id)
    {
        $author = Author::find($id);
        return view('sauthor')->with('author', $author);
    }

}
