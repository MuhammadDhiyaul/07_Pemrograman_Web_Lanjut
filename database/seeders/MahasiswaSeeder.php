<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nim' => '2041723015',
                'nama' => 'Fathin Naufaliya',
                'kelas' => 'TI-2E',
                'jurusan' => 'JTI',
                'no_handphone' => '08234594944'
            ],
            [
                'nim' => '2041723007',
                'nama' => 'Auliya',
                'kelas' => 'TI-2G',
                'jurusan' => 'JTI',
                'no_handphone' => '083835366321'
            ]
            ];

        DB::table('mahasiswa')->insert($data);
    }
}
