<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $blogs;

    public function index()
    {
        return view('home');
    }
    public function about()
    {
        $this->blogs =Blog::getAllBlog();
        return view('about', ['blogs' =>$this->blogs]);
    }
    public function contact()
    {
        return view('contact');
    }
}

