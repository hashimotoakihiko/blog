<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function showList()
    {
       $blogs = Blog::all();

    //    dd($blogs);
       
        return view('blog.list',
        ['blogs' => $blogs]); 
    }
}
