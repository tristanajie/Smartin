<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $title = "INDEX";
        return view('books.index', ['books'=> $books, 'title'=> $title]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        // if(!Gate::allows('create-book')){
        //     abort('403');
        // }
        // $this->validate($request, [
        //     'title' => 'required|max:255',
        //     'description' => 'required|max:255',
        // ]);

        $path = $request->file('image')->storePublicly('img', 'public');
        $ext = $request->file('image')->extension();

        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->image = $path;
        $book->user_id = Auth::id();
        $book->save();
        return redirect('/books');
    }

    public function show(string $id)
    {
        $book = Book::find($id);
        $img = Storage::url($book->image);
        return view('books.show', ['book'=>$book, 'image' => $img]);
    }

    public function edit(string $id)
    {
        $book = Book::find($id);
            return view('books.edit', ['book' => $book]);

    }

    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);
            $path = $request->file('image')->storePublicly('img', 'public');
            $ext = $request->file('image')->extension();

            $book->title = $request->title;
            $book->description = $request->description;
            $book->image = $request->image;
            $book->save();
            return redirect('/books');
    }

    public function destroy(string $id)
    {

        $book = Book::find($id);
        // if(!Gate::allows('delete-book', $book)){
        //     return "This book is not yours, therefore you can not delete it";
        // }
        $book->delete();
        return redirect('/books');
    }
}
