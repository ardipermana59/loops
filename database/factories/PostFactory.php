<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $paragraphs = $this->faker->paragraphs(rand(6, 11));
    $post = '';
    foreach ($paragraphs as $paragraph) {
        $post .= "<p>{$paragraph}</p>";
    }
    return [
        'title' => $faker->realText(30),
        'content' =>$post,
    ];
});
