<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getBooks(Request $request)
    {
        return Book::get();
    }

    public function getBook($book_id, Request $request)
    {
        return Book::where("id", $book_id)->first();
    }

    public function getBooksByCategory($cat_id, Request $request)
    {
        return Book::where("cat_id", $cat_id)->get();
    }

    public function createBook(Request $request)
    {

        request()->validate([
            'pdf'  => 'required|mimes:pdf|max:2048',
            'thumbnail'  => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        // dd($request->all());
        $fileName = null;
        if ($files = $request->file('pdf')) {
            $destinationPath = 'pdf'; // upload path
            $pdfFile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $pdfFile);
            $fileName = $pdfFile;
        }

        $thumbnailName = null;
        if ($img = $request->file('thumbnail')) {
            $imgdestination = 'thumbnails'; // upload path
            $imgfile = date('YmdHis') . "." . $img->getClientOriginalExtension();
            $img->move($imgdestination, $imgfile);
            $thumbnailName = "$imgfile";
        }

        $book = Book::create([
            "cat_id" => $request->cat_id,
            "title" => $request->title,
            "description" => $request->description,
            "author" => $request->author,
            "url" => $fileName,
            "thumbnail" => $thumbnailName
        ]);

        // dd($book);

        // return $book;

        if ($fileName) {
            $book->save();
            return view('books')->with($book);
        }
    }

    public function deleteBook($book_id, Request $request)
    {
        $book = Book::where('id', $book_id)->delete();
        return redirect()->back()->with("book", $book)->with("status", 'Successfully deleted!');
    }
}
