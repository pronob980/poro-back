<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function getAllBookmarks($user_id, Request $request)
    {
        return Bookmark::where("user_id", $user_id)->with("book_details")->get();
    }

    public function postBookmark(Request $request)
    {
        $book_id = $request->book_id;
        $user_id = $request->user_id;
        $bookmarked = Bookmark::firstOrNew([
            "book_id" => $book_id,
            "user_id" => $user_id
        ]);

        $bookmarked->save();

        return $bookmarked;
    }
}
