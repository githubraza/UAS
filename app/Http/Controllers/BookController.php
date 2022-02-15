<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data = Book::all();
        return view('home', ['data' => $data]);
    }

    public function getBookDetail($title){
        $data = Book::where('title', $title)->get();
        return view('detail', ['data' => $data]);
    }
}
