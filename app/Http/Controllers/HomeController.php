<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use function Termwind\ValueObjects\pr;

class HomeController extends Controller
{
    public $blogs, $blog;

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
    public function detail($id)
    {
        $this->blog = Blog::getBlogById($id);
        return view('detail', ['blog' =>$this->blog]);
    }

    public function makeFullName(Request $request)
    {
        return $request;
    }
}

