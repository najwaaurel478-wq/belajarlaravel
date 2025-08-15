<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('category')->orderBy('created_at', 'desc')->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:10|max:255',
            'slug' => 'required|unique:articles,slug',
            'content' => 'required',
            'autor' => 'required',
            'category_id' => 'required',
        ]);

        $article =Article::create($request->all());
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $articles = Article::find($id);
        return view('articles.show', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $articles = Article::find($id);
        return view('articles.edit', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, string $id)
{
    $request->validate([
        'title' => 'required|min:10|max:255',
        'slug' => 'required|unique:articles,slug,' . $id,
        'content' => 'required',
        'autor' => 'required',
        'category_id' => 'required',
    ], [
        'title.required' => 'Title harus diisi',
        'title.min' => 'Title minimal 10 karakter',
        'title.max' => 'Title maksimal 255 karakter',
        'slug.required' => 'Slug harus diisi',
        'slug.unique' => 'Slug sudah ada, silahkan ganti lainnya',
        'content.required' => 'Content harus diisi',
        'category_id.required' => 'Category Id harus diisi',
    ]);

    $article = Article::findOrFail($id);
    $article->update($request->all());

    return redirect()->route('articles.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $articles = Article::find($id)->delete();
       return redirect()->back();
    }
}
