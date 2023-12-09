<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Book;
use App\Models\Home;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    //
    public function index()
    {
        $books = Book::all();
        $title = "INDEX";
        return view('welcome', ['books'=> $books, 'title'=> $title]);
    }

}
