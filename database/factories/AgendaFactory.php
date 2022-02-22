<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(5),
            'teruntuk' => '2018',
            'tgl_agenda' => date('d-M-Y'),
            'isi' => $this->faker->sentence(200),
            'tempat_agenda' => 'SMKN 4 Gorontalo',
            'waktu_post' => '2018'
        ];
    }
}
