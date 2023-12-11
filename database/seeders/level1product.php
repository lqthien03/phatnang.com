<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class level1product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $level1product = [
            ['image' => 'linhkienmoi.png','tittle' => 'LINH KIỆN MỚI','gallery' => '', 'outstand' => true, 'new' => true,'selling' => true, 'display' => true,'seo_id' => '1'],
            ['image' => 'linhkiencu.png','tittle' => 'LINH KIỆN CŨ','gallery' => '', 'outstand' => true,'new' => true,'selling' => true, 'display' => true,'seo_id' => '4'],
            ['image' => 'thanhlyphongnet.png','tittle' => 'THANH LÝ PHÒNG NET','gallery' => '', 'outstand' => true,'new' => true,'selling' => true, 'display' => true,'seo_id' => '5'],
            ['image' => 'manhinhmaytinh.png','tittle' => 'MÀN HÌNH MÁY TÍNH','gallery' => '', 'outstand' => true,'new' => true,'selling' => true, 'display' => true,'seo_id' => '6'],
            ['image' => 'thietbiamthanh.png','tittle' => 'THIẾT BỊ ÂM THANH','gallery' => '', 'outstand' => true,'new' => true,'selling' => true, 'display' => true,'seo_id' => '7'],
            ['image' => 'laptop.png','tittle' => 'LAPTOP','gallery' => '', 'outstand' => true,'new' => true,'selling' => true, 'display' => true,'seo_id' => '8'],
            ['image' => 'ocung.png','tittle' => 'Ổ CỨNG PC','gallery' => '', 'outstand' => true,'new' => true,'selling' => true, 'display' => true,'seo_id' => '9'],
            ['image' => 'chuotbanphim.png','tittle' => 'CHUỘT, BÀN PHÍM','gallery' => '', 'outstand' => true,'new' =>true,'selling' => true, 'display' => true,'seo_id' => '10'],
        ];
        DB::table('level1_products')->insert($level1product);
    }
}
