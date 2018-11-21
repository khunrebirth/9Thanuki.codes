<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\Category;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Last Blog';
        $categories = Category::all();
        $blogs = Blog::all();

        return view('front-end.home', compact('categories', 'blogs', 'title'));
    }
}
