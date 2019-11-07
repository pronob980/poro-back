<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getBooks(Request $request)
    {
        return Book::paginate();
    }

    public function getBooksByCategory($cat_id, Request $request)
    {
        return Book::where("cat_id", $cat_id)->paginate();
    }

    public function createBook(Request $request)
    {

        request()->validate([
            'pdf'  => 'required|mimes:pdf|max:2048',
            'thumbnail'  => 'mimes:png,jpg,jpeg|max:2048',
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
        if ($files = $request->file('thumbnail')) {
            $destinationPath = 'thumbnails'; // upload path
            $pdfFile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $pdfFile);
            $fileName = "$pdfFile";
        }

        $book = Book::create([
            "cat_id" => $request->cat_id,
            "title" => $request->title,
            "description" => $request->description,
            "url" => $fileName,
            "thumbnail_id" => $thumbnailName
        ]);

        return $book;

        if ($fileName) {
            $book->save();
            return view('home')->with($book);
        }
    }
}
