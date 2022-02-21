<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('category.index', compact('categories'), ["title" => "Category"]);
    }

    public function create()
    {
        return view('category.create', ["title" => "Category"]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:155',
            'deskripsi' => 'required'
        ]);

        $category = Category::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        if ($category) {
            return redirect()
                ->route('categories.index')
                ->with([
                    'success' => 'New Category has been created successfully'
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

    public function edit($id_category)
    {
        $category = Category::findOrFail($id_category);
        return view('category.edit', compact('category'), ["title" => "Category"]);
    }

    public function update(Request $request, $id_category)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:155',
            'deskripsi' => 'required'
        ]);

        $category = Category::findOrFail($id_category);

        $category->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        if ($category) {
            return redirect()
                ->route('categories.index')
                ->with([
                    'success' => 'Category has been updated successfully'
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

    public function destroy($id_category)
    {
        $category = Category::findOrFail($id_category);
        $category->delete();

        if ($category) {
            return redirect()
                ->route('categories.index')
                ->with([
                    'success' => 'Category has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('categories.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
