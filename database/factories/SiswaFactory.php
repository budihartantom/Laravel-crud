<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Siswa;
use Faker\Generator as Faker;



$factory->define(App\Siswa::class, function (Faker $faker) {
	return [
		'nama_depan' => $faker->firstName,
		'nama_belakang' => $faker->lastName,
		'jenis_kelamin' => $faker->title,
		'agama' => $faker->city,
		'alamat' => $faker->text
	];
});

