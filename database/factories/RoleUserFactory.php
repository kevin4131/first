<?php

use Faker\Generator as Faker;

$factory->define(\App\Guodian\RoleUser::class, function (Faker $faker) {
    $data = factory(\App\Guodian\User::class, 1)->make();
    $id = \App\Guodian\User::insertGetId($data->toArray()[0]);
    return [
        //
        'user_id' => $id,
        'role_id' => 4 // 1,2,4
    ];
});

