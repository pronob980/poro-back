<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexCategory()
    {
        $categories = Category::all();
        return view('category')->with("categories", $categories);
    }
    public function indexBooks()
    {
        $categories = Category::all();
        $books = Book::all();
        return view('books')->with("books", $books)->with("categories", $categories);
    }
    public function indexStores()
    {
        $stores = Category::all();
        return view('store')->with("stores", $stores);
    }
}
