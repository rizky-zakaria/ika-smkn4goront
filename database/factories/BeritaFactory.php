<?php

namespace Database\Factories;

use Faker\Provider\Uuid;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Rfc4122\UuidV4;
use Ramsey\Uuid\Uuid as UuidUuid;

class BeritaFactory extends Factory
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
            'judul' => $this->faker->sentence(5),
            'isi' => $this->faker->sentence(200),
            'foto' => 'ung.png'
        ];
    }
}
