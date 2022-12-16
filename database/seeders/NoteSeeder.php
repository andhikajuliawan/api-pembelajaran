<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            [
                'title' => 'Tugas PAB week 1',
                'content' => 'membuat rangkuman dari pertemuan 1',
                'date' => date("Y-m-d H:i:s"),
                'status' => '1',
                'category' => '1'
            ]

        ]);
    }
}
