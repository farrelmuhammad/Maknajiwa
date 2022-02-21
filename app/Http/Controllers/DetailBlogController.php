<?php

namespace App\Http\Controllers;

use DB;
use App\Models\BlogArtikel;
use Illuminate\Http\Request;

class DetailBlogController extends Controller
{
    public function __invoke($id)
    {
        $body = DB::table('blog_artikels')->where('id_artikel', $id)->get();
        return view('detail-blog', compact('body'));
    }
}
