<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function home(){
        $b = Book::get();
        return view('dashboard', compact('b'));
    }

    public function list(){
        $data = Book::get();
        return view('book', compact('data'));
    }
    public function input(Request $request){
        $judul = $request -> titleBook;
        $penulis = $request -> write;
        $category = $request -> category;
        $year = $request -> year;
        $page = $request -> page;
        $book = $request -> book;
        $sinopsis = $request -> sinopsis;

        $b = new Book();

        $b -> title = $judul;
        $b -> writer = $penulis;
        $b -> category = $category;
        $b -> publish = $year;
        $b -> sinopsis = $sinopsis;
        $b ->page = $page;
        $b -> book = $book;

        $b -> save();

        return redirect() -> back() -> with('success', 'Data saved');
    }


    public function delete($id){
        $b = Book::find($id) -> delete();
        return redirect() -> back() -> with('deleted', 'Delete success');
    }

    public function edit($id){
        $b = Book::find($id);
        return view('edit', compact('b'));
    }

    public function update($id, Request $request){
        $judul = $request -> titleBook;
        $penulis = $request -> write;
        $category = $request -> category;
        $year = $request -> year;
        $page = $request -> page;
        $book = $request -> book;
        $sinopsis = $request -> sinopsis;


        $b = new Book();

        $b -> title = $judul;
        $b -> writer = $penulis;
        $b -> category = $category;
        $b -> publish = $year;
        $b -> sinopsis = $sinopsis;
        $b ->page = $page;
        $b -> book = $book;

        $b -> update();
        return redirect('bookList') -> with('success', 'Edit Success');
    }

}
