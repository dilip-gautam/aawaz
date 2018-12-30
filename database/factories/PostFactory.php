<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'author_id'=> rand(4,6),
        'title'=> $faker->sentence(rand(8,12)),
        'excerpt'=>$faker->text(rand(250,300)),
        'body'=>$faker->paragraphs(rand(10,15),true),
        'slug'=>$faker->slug(),
    ];
});
