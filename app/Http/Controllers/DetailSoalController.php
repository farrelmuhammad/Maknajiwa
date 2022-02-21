<?php

namespace App\Http\Controllers;

use App\Models\DetailSoal;
use Illuminate\Http\Request;

class DetailSoalController extends Controller
{
    public function __invoke($id)
    {
        $body = DetailSoal::where('id_kategori', $id)->get();
         
        return view('soal.index', compact('body'), ['idd' => $id]);
    }

    public function create(Request $request)
    {
        if($request->has('id')){
            $id_category = $request->input('id');
        }
        return view('soal.create', ['id_category' => $id_category]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'soal' => 'required|string|max:155'
        ]);

        if ($request->jawaban === '1') {
            $opsi_a = 'Tidak Pernah';
            $opsi_b = 'Pernah';
            $opsi_c = 'Kadang-kadang';
            $opsi_d = 'Sering'; 
            $opsi_e = 'Sangat Sering';
        }else if ($request->jawaban === '2') {
            $opsi_a = 'Sangat tidak setuju';
            $opsi_b = 'Tidak setuju';
            $opsi_c = 'Agak setuju';
            $opsi_d = 'Sangat setuju';  
            $opsi_e = '';
        }


        $category = DetailSoal::create([
            'id_kategori' => $request->id_category,
            'soal' => $request->soal,
            'opsi_a' => $opsi_a,
            'opsi_b' => $opsi_b,
            'opsi_c' => $opsi_c,
            'opsi_d' => $opsi_d,
            'opsi_e' => $opsi_e
        ]);

        if ($category) {
            return redirect('/detail-soal/'.$request->id_category)
                ->with([
                    'success' => 'New Question has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function edit($id)
    {
        $soal = DetailSoal::findOrFail($id);
        return view('soal.edit', compact('soal'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'soal' => 'required|string|max:155'
        ]);

        if ($request->jawaban === '1') {
            $opsi_a = 'Tidak Pernah';
            $opsi_b = 'Pernah';
            $opsi_c = 'Kadang-kadang';
            $opsi_d = 'Sering'; 
            $opsi_e = 'Sangat Sering';
        }else if ($request->jawaban === '2') {
            $opsi_a = 'Sangat tidak setuju';
            $opsi_b = 'Tidak setuju';
            $opsi_c = 'Agak setuju';
            $opsi_d = 'Sangat setuju';  
            $opsi_e = '';
        }

        $soal = DetailSoal::findOrFail($id);

        $soal->update([
            'soal' => $request->soal,
            'opsi_a' => $opsi_a,
            'opsi_b' => $opsi_b,
            'opsi_c' => $opsi_c,
            'opsi_d' => $opsi_d,
            'opsi_e' => $opsi_e
        ]);

        if ($soal) {
            return redirect('/detail-soal/'.$request->id_category)
                ->with([
                    'success' => 'Question has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $soal = DetailSoal::findOrFail($id);
        $soal->delete();

        if ($soal) {
            return redirect('/detail-soal/'.$request->id_category)
                ->with([
                    'success' => 'Question has been deleted successfully'
                ]);
        } else {
            return redirect('/detail-soal/'.$request->id_category)
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
