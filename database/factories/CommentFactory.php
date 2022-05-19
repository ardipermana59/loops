<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'website' => $faker->url,
        'comment' => $faker->paragraphs(rand(1,2), true),
    ];
});