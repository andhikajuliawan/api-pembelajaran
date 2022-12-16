<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
                "id" => '1',
                'status' => "Belum"
            ],
            [
                "id" => '2',
                'status' => "Progres"
            ],
            [
                "id" => '3',
                'status' => 'Selesai'
            ]
        ]);
    }
}
