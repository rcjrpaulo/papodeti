<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text,
        'user_id' => \App\Models\User::all()->random()->id,
        'article_id' => \App\Models\Article::all()->random()->id,
    ];
});
