<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $order = request('order') == 'asc' ? 'desc' : 'asc';
        $books = Book::sort($order)->paginate(20);
        return view('welcome', compact('books', 'order'));
    }

    public function show($book)
    {
        //1. Get book from database
        $book = Book::with('author')->find($book);


        //2. Send book to view
        return view('show', compact('book'));
    }
}
