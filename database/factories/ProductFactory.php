<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    return [
        'category_id' => $faker->randomDigitNotNull,
        'mark_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'sub_name' => $faker->word,
        'text_additional' => $faker->word,
        'precio' => $faker->word,
        'property' => $faker->word,
        'primary_image' => $faker->word,
        'content_box_image' => $faker->word,
        'slider_image' => $faker->word,
        'box_content' => $faker->word,
        'slug' => $faker->word,
        'title_description' => $faker->text,
        'Description' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
