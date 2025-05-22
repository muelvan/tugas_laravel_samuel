<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 15; $i++) {
            Siswa::create([
                'nama' => $faker->name,
                'nis' => $faker->unique()->numerify('##########'), // 10 digit angka unik
                'alamat' => $faker->address,
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                'tanggal_lahir' => $faker->dateTimeBetween('-20 years', '-10 years')->format('Y-m-d')
            ]);
        }
    }
}