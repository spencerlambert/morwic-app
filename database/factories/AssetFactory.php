<?php

use Faker\Generator as Faker;

$factory->define(App\Asset::class, function (Faker $faker) {
  return [
    'user_id' => $faker->numberBetween($min = 1, $max = 90),
    'image_url' => $faker->imageUrl($width = 640, $height = 480),
    'accured_date' => $faker->date(),
    'present_value' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100000),
    'accured_value' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100000),
    'ownership' => $faker->randomElement($array = array ('his','her','community')),
    'purchased_prior_marriage' => $faker->boolean,
    'updated_at' => $faker->dateTime(),
    'created_at' => $faker->dateTime(),
  ];
});
