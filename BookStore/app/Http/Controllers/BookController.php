<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //


    public function index(){
        $books = Book::paginate(10);
        return view('books.index',['books'=>$books]);
    }
    public function create(){
        return view('books.create');
    }
    public function store(Request $request){
        $request->validate([
            'id' => 'required',
            'Title' => 'required',
            'Author' => 'required',
            'ISBN' => 'required',
            'Price' => 'required',
        ]);
        Book::create([
            'id'=>$request->id,
            'Title' =>$request->Title,
            'Author' =>$request->Author,
            'ISBN' =>$request->ISBN,
            'Price' =>$request->Price
        ]);
        return redirect()->route('books.index');

    }

    public function edit(Book $book){
        return view('books.edit',['book'=>$book] );
    }

    public function update(Book $book, Request $request){
       $data = $request->validate([
            'id' => 'required',
            'Title' => 'required',
            'Author' => 'required',
            'ISBN' => 'required',
            'Price' => 'required',
        ]);
        $book->update($data);

        return redirect()->route('books.index')->with('success','Book updated successfully');

    }

    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('books.index')->with('success','Book deleted successfully');

    }

}

