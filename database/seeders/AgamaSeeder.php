<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_agama')->insert([
            [
                'agama' => 'Islam'
            ], [
                'agama' => 'Kristen'
            ], [
                'agama' => 'Hindu'
            ], [
                'agama' => 'Budha'
            ], [
                'agama' => 'Konghucu'
            ], [
                'agama' => 'Lainnya.'
            ]
        ]);
    }
}
