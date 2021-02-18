<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Mark;
use Faker\Generator as Faker;

$factory->define(Mark::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'slug' => $faker->word,
        'Description' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
