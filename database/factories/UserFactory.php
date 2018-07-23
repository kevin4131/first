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

$factory->define(\App\Guodian\User::class, function (Faker $faker) {
    $companyId = \App\Guodian\Company::select('id')->inRandomOrder()->first()->toArray()['id'];
    return [
        //
        'username'        => 'yw' . $faker->numberBetween(100000, 999999),
        'nickname'        => $faker->firstName,
        'password'        => bcrypt('gd123456'),
        'email'           => $faker->companyEmail,
        'mobile'          => 1 . $faker->numberBetween(3, 9) . rand(000000000, 999999999),
        'reg_ip'          => env('DB_HOST'),
        'last_login_at'   => date('Y-m-d H:i:s'),
        'last_login_ip'   => app('request')->ip(),
        'next_resetwd_at' => date('Y-m-d H:i:s', strtotime('+2 month')),
        'company_id'      => $companyId,
    ];
});
