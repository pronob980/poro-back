<?php

namespace App\Http\Controllers;

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
        return view('category', ['categories' => $categories]);
    }
    public function indexBooks()
    {
        $categories = Category::all();
        return view('books', ['categories' => $categories]);
    }
    public function indexStores()
    {
        $categories = Category::all();
        return  view("store", compact("categories"));
    }
}
