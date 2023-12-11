<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class level2product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $level2product = [
            ['image' => '','tittle' => 'CPU-BỘ XỬ LÝ','display' => true,'level1_product_id' => '1','seo_id' => '2'],
            ['image' => '','tittle' => 'CPU-BỘ XỬ LÝ','display' => true,'level1_product_id' => '2','seo_id' => '2'],
            ['image' => '','tittle' => 'MAINBOARD-BO MẠCH CHỦ CŨ','display' => true,'level1_product_id' => '2','seo_id' => '2'],
            ['image' => '','tittle' => 'BỘ NHỚ RAM','display' => true,'level1_product_id' => '1','seo_id' => '18'],
            ['image' => '','tittle' => 'VGA-CARD MÀN HÌNH','display' => true,'level1_product_id' => '1','seo_id' => '22'],
            ['image' => '','tittle' => 'MAINBOARD - BO MẠCH CHỦ','display' => true,'level1_product_id' => '1','seo_id' => '14'],
            ['image' => '','tittle' => 'BỘ NHỚ RAM CŨ','display' => true,'level1_product_id' => '2','seo_id' => '18'],
            ['image' => '','tittle' => 'VGA - CARD MÀN HÌNH CŨ','display' => true,'level1_product_id' => '2','seo_id' => '22'],
            ['image' => '','tittle' => 'LAPTOP DELL','display' => true,'level1_product_id' => '6','seo_id' => '25'],
            ['image' => '','tittle' => 'LAPTOP ASUS','display' => true,'level1_product_id' => '6','seo_id' => '26'],
            ['image' => '','tittle' => 'LAPTOP HP','display' => true,'level1_product_id' => '6','seo_id' => '27'],
            ['image' => '','tittle' => 'LINH KIỆN LAPTOP','display' => true,'level1_product_id' => '6','seo_id' => '28'],
            ['image' => '','tittle' => 'Thiết bị âm thanh loa vi tính','display' => true,'level1_product_id' => '5','seo_id' => '29'],
            ['image' => '','tittle' => 'Thiết bị âm thanh loa tai nghe','display' => true,'level1_product_id' => '5','seo_id' => '30'],


            
        ];
        DB::table('level2_products')->insert($level2product);
    }
}
