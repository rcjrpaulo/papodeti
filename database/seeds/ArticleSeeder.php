<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Article::class, 200)
            ->create()
            ->each(function ($article) {
//                $article->categories()->sync(factory(\App\Models\Category::class, 2)->create());
                $categories = [
                    \App\Models\Category::all()->random()->id,
                    \App\Models\Category::all()->random()->id,
                ];
                $article->categories()->sync($categories);
            });
    }
}
