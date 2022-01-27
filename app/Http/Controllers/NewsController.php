<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get the data
        //return view with the data
        $posts = News::orderBy('created_at', 'desc')->paginate(4);
        return view('news')->with([
            'posts' => $posts,
        ]);
    }

    public function get($id)
    {
        $post = News::find($id)->first();
        return view('single-news')->with('post', $post);
    }
}
