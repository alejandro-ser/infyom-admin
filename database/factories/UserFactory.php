<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {

    $name = $faker->word;
    $lastName = $faker->word;

    return [
        'name' => $name.' '.$lastName,
        'email' => $name.'-'.$lastName.'@correo.dev',
        'password' => Hash::make('12345678'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
