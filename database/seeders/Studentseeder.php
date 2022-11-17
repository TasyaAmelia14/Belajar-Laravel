<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            "namalengkap" => "Tasya Amelia",
            "nis" => 12100778,
            "jk" => "P",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('student')->insert([
            "namalengkap" => "Wananda Dilla Zahra",
            "nis" => 12100376,
            "jk" => "P",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('student')->insert([
            "namalengkap" => "kartika sari dewi",
            "nis" => 12100800,
            "jk" => "P",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
    }
}
