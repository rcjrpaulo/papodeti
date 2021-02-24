<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryArticleController extends Controller
{

    public function edit(Category $category)
    {
        $category->load('articles');
        $articles = Article::select('id', 'title')->get();

        return view('category_articles.edit', compact('category', 'articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->articles()->sync($request->articles ?? []);

        session()->flash('success', 'Categoria atualizada com sucesso !');

        return redirect()->route('category_articles.edit', $category->id);
    }
}
