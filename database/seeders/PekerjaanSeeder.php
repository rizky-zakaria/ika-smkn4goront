<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_pekerjaan')->insert([
            [
                'pekerjaan' => 'ASN / TNI /POLRI'
            ], [
                'pekerjaan' => 'Pegawai Non-ASN'
            ], [
                'pekerjaan' => 'Wirausaha'
            ], [
                'pekerjaan' => 'Wiraswasta'
            ], [
                'pekerjaan' => 'Buruh'
            ], [
                'pekerjaan' => 'Lainnya.'
            ]
        ]);
    }
}
