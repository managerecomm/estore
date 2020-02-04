<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Site\Resource;
use Faker\Generator as Faker;

$factory->define(Resource::class, function (Faker $faker) {

    $name = $faker->sentence(rand(2,3), true);
    $intro = $faker->realText(rand(150,200));
    $published = rand(1,5) > 1;
    $content = $faker->realText(rand(400,800));

    $data = [
            'parent' => rand(1,11),
            'uri' => Str::slug($name),
            'name' => $name,
            'pagetitle' => $name,
            'intro' => $intro,
            'content' => $content,
            'published' => $published,
            'created_at' => $published ? $faker->dateTimeBetween('-2 months', '-1 days') : null,
    ];

    return $data;
});
