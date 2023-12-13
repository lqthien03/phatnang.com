<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class introduce extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $introduce = [
            ['tittle' => 'VI TÍNH PHÁT NĂNG', 'content' => '', 'image' => '', 'display' => true, 'seo_id' => '31']
        ];

        DB::table('introduces')->insert($introduce);
    }
}
