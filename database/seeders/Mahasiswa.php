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

        for ($i=0; $i <= 10 ; $i++) {
            AppMahasiswa::create([
                'nama' => $faker->name,
                'nim' => $i,
                'kelamin' => 'laki'
            ]);
        }
    }
}
