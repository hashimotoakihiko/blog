<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;

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

    /*ブログ詳細を表示する
    * @return view
    */

    public function showCreate() {
        return view('blog.form');
    }

    /*ブログを登録する
    * @return view
    */

    public function exeStore(BlogRequest $request) {
        //ブログのデータを受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try{
        //ブログを登録
            Blog::create($inputs);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'ブログを登録しました');
        return redirect(route('blogs'));
    }

     /*ブログ編集フォームを表示する
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

        return view('blog.edit',
        ['blog' => $blogs]); 
    }

      /*ブログを更新する
        * @return view
    */

    public function exeUpdate(BlogRequest $request) {
        //ブログのデータを受け取る
        $inputs = $request->all();

        dd($inputs);

        \DB::beginTransaction();
        try{
        //ブログを登録
            $blog = Blog::find($inputs
            ['id']);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'ブログを登録しました');
        return redirect(route('blogs'));
    }
}
