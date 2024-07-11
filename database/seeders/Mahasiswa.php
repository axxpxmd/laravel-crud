<?php

namespace Database\Seeders;

use App\Models\Mahasiswa as AppMahasiswa;
use Faker\Factory as Faker;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10 ; $i++) {
            $kelamin = $faker->randomElement(['Perempuan', 'Laki - Laki']);

            AppMahasiswa::create([
                'nama' => $faker->name,
                'nim' => mt_rand(1000000, 9999999),
                'kelamin' => $kelamin
            ]);
        }
    }
}
