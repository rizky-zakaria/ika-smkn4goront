<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KomentarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence(5),
            'email' => $this->faker->sentence(1),
            'company_name' => $this->faker->sentence(3),
            'subjek' => $this->faker->sentence(7),
            'komentar' => $this->faker->sentence(20),
            'waktu_post' => '2019'
        ];
    }
}
