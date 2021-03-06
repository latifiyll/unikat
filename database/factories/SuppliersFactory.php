<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'full_name' => $faker->firstName().' '.$faker->lastName,
        'company' => $faker->company,
        'phone' =>$faker->phoneNumber,
        'city'=>$faker->city,
        'address'=>$faker->address,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ];
});
