<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'author_id'=> rand(1,3),
        'category_id'=>rand(1,3),
        'title'=> $faker->sentence(rand(8,12)),
        'excerpt'=>$faker->text(rand(250,300)),
        'body'=>$faker->paragraphs(rand(10,15),true),
        'slug'=>$faker->slug(),
        'created_at'=>'2019-01-01 06:00:00',
        'updated_at'=>'2019-01-01 06:00:00',
        'published_at' =>'2019-01-01 06:00:00'
    ];
});
