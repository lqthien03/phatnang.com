<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class banner extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $banner =[ 
        ['image' => 'slider-4501.jpg','tittle' => 'banner1','link' => '','display' => true],
        ['image' => 'banner2.jpg','tittle' => 'banner2', 'link' => '','display' => true],
        ['image' => 'banner3.jpg','tittle' => 'banner3', 'link' => '','display' => true],
        ['image' => 'banner4.jpg','tittle' => 'banner4', 'link' => '','display' => true],
       ];
       DB::table('banners')->insert($banner);
    }
}
