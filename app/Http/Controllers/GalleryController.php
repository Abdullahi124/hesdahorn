<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show()
    {
        $images = Gallery::all();
        return view('gallery')->with('images', $images);
    }
}
