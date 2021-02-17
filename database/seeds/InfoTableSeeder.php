<?php

use App\Info;
use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Info::create([
            'unit' => '0',
            'pegawai' => '0',
            'pengguna' => '0',
        ]);
    }
}
