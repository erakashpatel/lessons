<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'title'=>$faker->jobTitle,
        'body'=>$faker->text,
        'views'=>$faker->randomNumber,
        'length'=>$faker->randomNumber,
        'difficulty'=>$faker->randomElement($array = array ('Beganier','Intermediate','Advanced')),
    ];
});
