<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drugs')->insert([
            'kode' => 'T001',
            'name' => 'Diapet',
            'deskripsi' => 'obat diare',
            'tipe' => 'kapsul',
            'jumlah' => '3',
            'hargaSatuan' => '2000',

        ]);
    }
}
