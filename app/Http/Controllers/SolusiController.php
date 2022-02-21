<?php

namespace App\Http\Controllers;

use App\Models\Solusi;
use Illuminate\Http\Request;

class SolusiController extends Controller
{
    public function edit($id)
    {
        $solusi = Solusi::findOrFail($id);
        return view('solusi.edit', compact('solusi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ringkas' => 'required',
            'solusi' => 'required',
            'sebab' => 'required',
            'gejala_a' => 'required',
            'gejala_b' => 'required',
            'gejala_c' => 'required',
            'gejala_d' => 'required',
            'gejala_e' => 'required'
        ]);

        $solusi = Solusi::findOrFail($id);
        $solusi->update([
            'ringkas' => $request->ringkas,
            'solusi' => $request->solusi,
            'sebab' => $request->sebab,
            'gejala_a' => $request->gejala_a,
            'gejala_b' => $request->gejala_b,
            'gejala_c' => $request->gejala_c,
            'gejala_d' => $request->gejala_d,
            'gejala_e' => $request->gejala_e
        ]);

        if ($solusi) {
            return redirect()
                ->route('categories.index')
                ->with([
                    'success' => 'Solusi has been updated successfully'
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

}
