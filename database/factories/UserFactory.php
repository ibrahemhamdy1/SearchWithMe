<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        //'user_phone' =>$faker->postcode,
        'user_city' => $faker->city,
        'address' => $faker->streetAddress,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Categorie::class, function (Faker $faker) {

    return  [
        'name'=>$faker->name,
        'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),

    ];
});



$factory->define(App\Post::class, function (Faker $faker) {
    
        return  [
            'name'=>$faker->name,
            'age'=>$faker->randomDigit,
            'description'=>$faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'adders' => $faker->streetAddress,
            'country' => $faker->city,
            'gnader'=>$faker->titleMale,
            'lost_relationship'=>$faker->word,
            'image'=>$faker->imageUrl($width = 640, $height = 480),
            'tags'=>$faker->word(),
            'cat_id'=>$faker->numberBetween($min = 1, $max =3),
            'user_id'=>$faker->numberBetween($min = 1, $max =10),
        ];
    });


    $factory->define(App\Comment::class, function (Faker $faker) {
        
            return  [
                'comment'=>$faker->paragraph($nbSentences = 1, $variableNbSentences = true),
                'post_id'=>$faker->numberBetween($min = 1, $max =10),
                'user_id'=>$faker->numberBetween($min = 1, $max =10),
            ];
        });