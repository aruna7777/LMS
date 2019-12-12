<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function addbook()
    {
        return view('books.new_book');
    }
    
    public function searchbook()
    {
        return view('books.search_book');
    }

    public function detailsbook()
    {
        return view('books.details_book');
    }
}
