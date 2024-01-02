<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use function Termwind\ValueObjects\pr;

class HomeController extends Controller
{
    public $blogs, $blog, $fullName, $i,$result, $lastNumber, $firstNumber;

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
    public function series()
    {
        return view('series');
    }
    public function detail($id)
    {
        $this->blog = Blog::getBlogById($id);
        return view('detail', ['blog' =>$this->blog]);
    }

    public function makeFullName(Request $request)
    {
        $this->fullName = $request->first_name. " ". $request->last_name;
        $this->firstName = $request->first_name;
        $this->lastName = $request->last_name;
        return redirect('/contact')->with([
            'message' => $this->fullName,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName
            ]);

    }

    public function makeSeries(Request $request)
    {
        for ($this->i = $request->first_name; $this->i <= $request->last_name; $this->i++){
            $this->result .= $this->i. " ";
        }
        return redirect('/series')->with('message', $this->result);
    }

}

