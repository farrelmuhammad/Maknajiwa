<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ResultController extends Controller
{
    public function store(Request $request)
    {
        $answerScore = array_slice($request->all(), 1);
        $totalScore = 0;
        foreach ($answerScore as $score) {
            $totalScore += $score;
        }
        $totalScore /= count($answerScore);
        $totalScore *= 20;
        
        $body = DB::table('solusi')->where('id_kategori', $request->id_kategori)->get();
        $solusi = DB::table('solusii')->where('id_kategori', $request->id_kategori)->get();
        
        return view('result', compact('totalScore', 'body', 'solusi'));
    }

    public function show($result)
    {
        return view('result');
    }
}