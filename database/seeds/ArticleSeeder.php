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
        factory(\App\Article::class, 200)
            ->create()
            ->each(function ($article) {
                $article->categories()->save(factory(\App\Category::class)->make());
            });
    }
}
