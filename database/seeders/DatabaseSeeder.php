<?php

namespace Database\Seeders;

use App\Models\Agenda;
use App\Models\Alumni;
use App\Models\Berita;
use App\Models\Komentar;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AgamaSeeder::class);
        $this->call(PekerjaanSeeder::class);
        $this->call(UserSeeder::class);
        // User::factory(1)->create();
        Agenda::factory(10)->create();
        Berita::factory(25)->create();
        Alumni::factory(10)->create();
        Komentar::factory(10)->create();
    }
}
