<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(Request $request)
    {
        return Category::paginate();
    }

    public function createCategory(Request $request)
    {

        $thumbnailName = null;
        if ($files = $request->file('thumbnail')) {
            $destinationPath = 'thumbnails'; // upload path
            $pdfFile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $pdfFile);
            $fileName = "$pdfFile";
        }

        $category = Category::create([
            "parent_id" => $request->parent_id,
            "title" => $request->title,
            "description" => $request->description,
            "thumbnail_id" => $request->thumbnail
        ]);

        if ($thumbnailName) {
            $category->save();
            return view('home')->with($category);
        }
    }
}
