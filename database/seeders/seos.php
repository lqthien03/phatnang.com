<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seos = [
            ['tittle' => 'LINH KIỆN MỚI', 'keyword' => 'linh kiện mới', 'description' => ''],
            ['tittle' => 'CPU-BỘ XỬ LÝ', 'keyword' => 'CPU BỘ XỬ LÝ', 'description' => ''],
            ['tittle' => 'Intel Pentium', 'keyword' => 'intel-pentium', 'description' => ''],
            ['tittle' => 'LINH KIỆN CŨ', 'keyword' => 'linh kiện cũ', 'description' => ''],
            ['tittle' => 'THANH LÝ PHÒNG NET', 'keyword' => 'thanh lý phòng net', 'description' => ''],
            ['tittle' => 'MÀN HÌNH MÁY TÍNH', 'keyword' => 'màn hình máy tính', 'description' => ''],
            ['tittle' => 'THIẾT BỊ ÂM THANH', 'keyword' => 'thiết bị âm thanh', 'description' => ''],
            ['tittle' => 'LAPTOP', 'keyword' => 'laptop', 'description' => ''],
            ['tittle' => 'Ổ CỨNG PC', 'keyword' => 'ổ cứng', 'description' => ''],
            ['tittle' => 'CHUỘT, BÀN PHÍM', 'keyword' => 'chuột,bàn phím', 'description' => ''],
            ['tittle' => 'Intel Core i3', 'keyword' => 'intel core i3', 'description' => ''],
            ['tittle' => 'Intel Core i5', 'keyword' => 'intel core i5', 'description' => ''],
            ['tittle' => 'Intel Core i7', 'keyword' => 'intel core i7', 'description' => ''],
            ['tittle' => 'MAIN-GIGABYTE CŨ', 'keyword' => 'main gigabyte cũ', 'description' => ''],
            ['tittle' => 'MAIN ASUS CŨ', 'keyword' => 'main asus cũ', 'description' => ''],
            ['tittle' => 'MAIN COLOFULL CŨ', 'keyword' => 'main colo full cũ', 'description' => ''],
            ['tittle' => 'BỘ NHỚ RAM', 'keyword' => 'bộ nhớ ram', 'description' => ''],
            ['tittle' => 'DDR4 PC', 'keyword' => 'ddr4 pc', 'description' => ''],
            ['tittle' => 'DDR3 PC', 'keyword' => 'ddr3 pc', 'description' => ''],
            ['tittle' => 'DDR3 SERVER', 'keyword' => 'ddr3 server', 'description' => ''],
            ['tittle' => 'VGA CARD MÀN HÌNH', 'keyword' => 'vga card màn hình', 'description' => ''],
            ['tittle' => 'VGA-GIGABYTE NEW', 'keyword' => 'card màn hình vga gigabyte mới', 'description' => ''],
            ['tittle' => 'VGA-GIGABYTE OLD', 'keyword' => 'card màn hình vga gigabyte cũ', 'description' => ''],
            ['tittle' => 'LAPTOP DELL', 'keyword' => 'laptop dell', 'description' => ''],
            ['tittle' => 'Chính sách thanh toán', 'keyword' => 'Chính sách thanh toán', 'description' => ''],
            ['tittle' => 'Chính sách bảo hành', 'keyword' => 'Chính sách bảo hành', 'description' => ''],
            ['tittle' => 'Chính sách người dùng', 'keyword' => 'Chính sách người dùng', 'description' => ''],
            ['tittle' => 'Chính sách mua hàng', 'keyword' => 'Chính sách mua hàng', 'description' => ''],
            ['tittle' => 'Giới thiệu Vi tính Phát Năng', 'keyword' => 'Giới thiệu Vi tính Phát Năng', 'description' => ''],

            
        ];
        DB::table('seos')->insert($seos);

    }
}
