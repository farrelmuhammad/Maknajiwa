<?php

namespace App\Http\Controllers;

use App\Models\BlogArtikel;
use Illuminate\Http\Request;

class Blog extends Controller
{
    public function index()
    {
        $body = BlogArtikel::all();
        return view('blog', compact('body'));
    }
}
