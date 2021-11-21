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

    /*ブログ詳細を表示する
        * @param int $id
        * @return view
    */

    public function showDetail($id)
    {
       $blogs = Blog::find($id);

       if (is_null($blogs)) {
           \Session::flash('err_msg','データがありません。');
           return redirect(route('blogs'));
       }

        
        return view('blog.detail',
        ['blog' => $blogs]); 
    }
}
