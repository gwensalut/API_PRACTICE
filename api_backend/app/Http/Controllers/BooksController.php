<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index(){
        $book = Book::all();
        return response()->json($book);
    }
}
