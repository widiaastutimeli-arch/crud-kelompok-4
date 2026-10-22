<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nis' => fake()->unique()->numerify('##########'),
            'nama' => fake()->name(),
            'kelas' => fake()->randomElement([
                'X PPLG A',
                'X PPLG B',
                'X PPLG C',
            ]),
            'jurusan' => 'PPLG',
            'tanggal_lahir' => fake()->dateTimeBetween(
                '-18 years',
                '-15 years'
            )->format('Y-m-d'),
            'alamat' => fake()->address(),
            'keterangan' => fake()->optional()->sentence(),
        ];
    }
}
