<?php

namespace App\Http\Controllers;

use App\Models\BookMarked;
use Illuminate\Http\Request;

class BookMarkedController extends Controller
{
    public function getAllBookmarked($user_id, Request $request) {
        return BookMarked::where("user_id", $user_id)->with("book_details")->get();
    }
    
    public function postBookMarked(Request $request) {
        $book_id = $request->book_id;
        $user_id = $request->user_id;
        $bookmarked = BookMarked::firstOrNew([
            "book_id" => $book_id,
            "user_id" => $user_id
        ]);

        $bookmarked->save();

        return $bookmarked;
    }
}
