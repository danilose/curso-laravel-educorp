<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sala;
use Faker\Generator as Faker;

$factory->define(Sala::class, function (Faker $faker) {
    return [
        //
        'nome' => $faker->name,
        'projetor' => 1,
        'qtdAlunos' => 20,
    ];
});
