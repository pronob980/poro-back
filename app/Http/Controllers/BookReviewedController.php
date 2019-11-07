<?php

namespace App\Http\Controllers;

use App\Models\ReviewBook;
use Illuminate\Http\Request;

class BookReviewedController extends Controller
{
    public function getAllBookmarked($user_id, Request $request) {
        return ReviewBook::where("user_id", $user_id)->with("book_details")->get();
    }

    public function postReview(Request $request) {
        $book_id = $request->book_id;
        $user_id = $request->user_id;
        $value = $request->value;
        $bookmarked = ReviewBook::firstOrNew([
            "book_id" => $book_id,
            "user_id" => $user_id
        ]);

        $bookmarked->value = $value;

        $bookmarked->save();

        return $bookmarked;
    }
}
