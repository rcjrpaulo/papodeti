<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{

    /**
     * @param  Article  $article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Article $article)
    {
        $categories = Category::select('id', 'name')->get();
        $article->load('categories');

        return view('article_categories.edit', compact('article', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->categories()->sync($request->categories ?? []);

        session()->flash('success', 'Artigo atualizado com sucesso !');

        return redirect()->route('article_categories.edit', $article->id);
    }
}
