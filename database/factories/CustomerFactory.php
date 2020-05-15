<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'id' =>factory(App\Customers::class),
        'name' => $faker -> sentence,
        'address' => $faker -> sentence,
        'contact_number' => $faker -> number,
        'opening_balance' => $faker -> number

    ];
});
