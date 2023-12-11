<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class level3product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $level3product = [
            ['image' => '','tittle' => 'Intel Pentium', 'display' => true, 'level2_product_id' => '29','seo_id' => true],
            ['image' => '','tittle' => 'Intel Core i3', 'display' => true,'level2_product_id' => '29','seo_id' => true],
            ['image' => '','tittle' => 'Intel Core i5', 'display' => true,'level2_product_id' => '29','seo_id' => true],
            ['image' => '','tittle' => 'Intel Core i7', 'display' => true,'level2_product_id' => '29','seo_id' => true],
            ['image' => '','tittle' => 'MAIN - GIGABYTE', 'display' => true,'level2_product_id' => '34','seo_id' => true],
            ['image' => '','tittle' => 'MAIN - ASUS', 'display' => true,'level2_product_id' => '34','seo_id' =>true],
            ['image' => '','tittle' => 'MAIN - MSI', 'display' => true,'level2_product_id' => '34','seo_id' =>true],
            ['image' => '','tittle' => 'MAIN - COLOFULL', 'display' => true, 'level2_product_id' => '34','seo_id' =>true],
            ['image' => '','tittle' => 'DDR4 PC', 'display' => true,'level2_product_id' => '32','seo_id' =>true],
            ['image' => '','tittle' => 'DDR3 PC', 'display' => true,'level2_product_id' => '32','seo_id' =>true],
            ['image' => '','tittle' => 'DDR3 SERVER', 'display' => true,'level2_product_id' => '32','seo_id' =>true],
            ['image' => '','tittle' => 'MAIN - GIGABYTE', 'display' => true,'level2_product_id' => '31','seo_id' => true],
            ['image' => '','tittle' => 'MAIN - ASUS', 'display' => true,'level2_product_id' => '31','seo_id' => true],
            ['image' => '','tittle' => 'MAIN - MSI', 'display' => true,'level2_product_id' => '31','seo_id' => true],
            ['image' => '','tittle' => 'VGA - GIGABYTE MỚI', 'display' => true,'level2_product_id' => '33','seo_id' => true],
            ['image' => '','tittle' => 'VGA - ASUS - MỚI', 'display' => true,'level2_product_id' => '33','seo_id' => true],
            ['image' => '','tittle' => 'CPU - INTEL PENTIUM', 'display' => true,'level2_product_id' => '30','seo_id' => true],
            ['image' => '','tittle' => 'CPU - INTEL CORE I3', 'display' => true,'level2_product_id' => '30','seo_id' =>true],
            ['image' => '','tittle' => 'CPU - INTEL CORE I5', 'display' => true,'level2_product_id' => '30','seo_id' => true],
            ['image' => '','tittle' => 'CPU - INTEL CORE I7', 'display' => true,'level2_product_id' => '30','seo_id' => true],
            ['image' => '','tittle' => 'RAM DDR4 PC', 'display' => true,'level2_product_id' => '35','seo_id' => true],
            ['image' => '','tittle' => 'RAM DDR3 PC', 'display' => true,'level2_product_id' => '35','seo_id' => true],
            ['image' => '','tittle' => 'RAM DDR3 SERVER', 'display' => true,'level2_product_id' => '35','seo_id' => true],
            ['image' => '','tittle' => 'VGA - GIGABITE CŨ', 'display' => true,'level2_product_id' => '36','seo_id' => true],
            ['image' => '','tittle' => 'VGA - ASUS CŨ', 'display' => true,'level2_product_id' => '36','seo_id' => true],
            ['image' => '','tittle' => 'VGA - MSI CŨ', 'display' => true,'level2_product_id' => '36','seo_id' => true],
            ['image' => '','tittle' => 'VGA - COLOFULL CŨ', 'display' => true,'level2_product_id' => '36','seo_id' =>true],
            ['image' => '','tittle' => 'VGA - ZOCTAC', 'display' => true,'level2_product_id' => '36','seo_id' =>true],


            
        ];
        DB::table('level3_products')->insert($level3product);

    }
}
