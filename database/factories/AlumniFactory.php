<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Rfc4122\UuidV4;

class AlumniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => UuidV4::uuid4(),
            'nama' => $this->faker->sentence(2),
            'tgl_lahir' => date('d-M-Y'),
            'jk' => 'Pria',
            'pekerjaan' => $this->faker->sentence(1),
            'nomor_hp' => '098798',
            'foto' => 'man.jpeg',
            'agama' => 'islam',
            'tempat_lahir' => 'Gorontalo',
            'alamat' => $this->faker->sentence(6),
            'thn_angkatan' => date('Y'),
        ];
    }
}
