<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['image' => '400vm0105-7197.jpg', 'tittle' => 'CPU G5400', 'outstand' => true, 'display' => true, 'level2_product_id' => '29', 'seo_id' => '1', 'level3_products_id' => '85', 'level1_products_id' => '1'],
            ['image' => '500-4584.png', 'tittle' => 'MAIN GIGABYTE B365M-D2V CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '14', 'level1_products_id' => '2'],
            ['image' => '2872913156861378590-5985-8809.png', 'tittle' => 'DDR4-TEAMGROUP Elite Plus 4GB', 'outstand' => true, 'display' => true, 'level2_product_id' => '35', 'seo_id' => '1', 'level3_products_id' => '105', 'level1_products_id' => '2'],
            ['image' => '8ba249a3ab67321494cf6123e9670fdd-2677.jpg', 'tittle' => 'CPU-I3 6100', 'outstand' => true, 'display' => true, 'level2_product_id' => '30', 'seo_id' => '1', 'level3_products_id' => '102', 'level1_products_id' => '2'],
            ['image' => '21712intelg4560-5946.jpg', 'tittle' => 'CPU-G4560', 'outstand' => true, 'display' => true, 'level2_product_id' => '30', 'seo_id' => '1', 'level3_products_id' => '101', 'level1_products_id' => '2'],
            ['image' => '0557ce8cb6a616ab15f01ba8b583670djpg800x800q100-4900.jpg', 'tittle' => 'CPU G4400', 'outstand' => true, 'display' => true, 'level2_product_id' => '30', 'seo_id' => '1', 'level3_products_id' => '101', 'level1_products_id' => '2'],
            ['image' => '43691giant117307-5590.jpg', 'tittle' => 'MAIN ASUS H110M-K CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '97', 'level1_products_id' => '2'],
            ['image' => '500-2-2628.png', 'tittle' => 'MAIN GIGABYTE H110M - DS2 CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '96', 'level1_products_id' => '2'],
            ['image' => 'unnamed-3350.jpg', 'tittle' => 'MAIN ASUS H110M-E CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '97', 'level1_products_id' => '2'],
            ['image' => '3576-p2-1557217394-1016.jpg', 'tittle' => 'MAIN ASUS H110M-D CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '97', 'level1_products_id' => '2'],
            ['image' => '8480big-6826.jpg', 'tittle' => 'MAIN GIGABYTE-H81 DS2 CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '96', 'level1_products_id' => '2'],
            ['image' => '400vm0105-7197.jpg', 'tittle' => 'CPU G5400', 'outstand' => true, 'display' => true, 'level2_product_id' => '29', 'seo_id' => '1', 'level3_products_id' => '85', 'level1_products_id' => '1'],
            ['image' => 'line-1771.jpg', 'tittle' => 'MAIN ASUS H81M-K CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '97', 'level1_products_id' => '2'],
            ['image' => 'unnamed-7992.jpg', 'tittle' => 'MAIN GIGABYTE-H61 DS2 CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '96', 'level1_products_id' => '2'],
            ['image' => 'a97e412a8eb00f798df1b62b06296233-6199.jpg', 'tittle' => 'MAIN ASUS H81M-D CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '97', 'level1_products_id' => '2'],
            ['image' => 'b8931518b7694c6980651c129f32b807-9837.jpg', 'tittle' => 'MAIN ASUS H81M-E CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '97', 'level1_products_id' => '2'],
            ['image' => '12938145490h61mk-1886.jpg', 'tittle' => 'MAIN ASUS H61M-K CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '97', 'level1_products_id' => '2'],
            ['image' => 'palit1050tidualfan-7536.jpg', 'tittle' => 'VGA Palit GTX 1050Ti 4G DUAL (2 Fan)', 'outstand' => true, 'display' => true, 'level2_product_id' => '36', 'seo_id' => '1', 'level3_products_id' => '92', 'level1_products_id' => '2'],
            ['image' => 'htb18tqkxpluk1rjy0fhq6xpdfxap-9568.jpg', 'tittle' => 'MAIN ASUS H61M-D CŨ', 'outstand' => true, 'display' => true, 'level2_product_id' => '31', 'seo_id' => '1', 'level3_products_id' => '97', 'level1_products_id' => '2'],

        ];
        DB::table('detail_products')->insert($products);

    }
}
// ['image' => '6fe4382b7be81732a1300a1585429f391-1-5201.jpg', 'tittle' => 'VISION GAMING VM01', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '1'],
// ['image' => '6fe4382b7be81732a1300a1585429f391-1-5201 (1).jpg', 'tittle' => 'Phát Wifi PIX-LINK LV-WR08', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '1'],
// ['image' => 'e1b61f2ef53d3f63662c-3714.jpg', 'tittle' => 'Thanh Lý Phòng Net A- Z', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '3'],
// ['image' => 'aoc-27inch-2970.jpg', 'tittle' => 'LCD 27” AOC I2769V Full HD IPS', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '2'],
// ['image' => 'vsp-19-9843.jpg', 'tittle' => 'LCD 19 VSP VE19(LE1902) Chính Hãng', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '4'],

// ['image' => '424be9b53ea6f4f8adb7-7989.jpg', 'tittle' => 'Thanh Lý Phòng Net A- Z Giá Cao', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '3'],

// ['image' => '7bdb691854a9b9aa809c32502ed3fec2-8809.jpg', 'tittle' => 'Nguồn Jetek Q9800-Gaming (80 Plus Gold)', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '2'],
// ['image' => 'vsp-20-5179.png', 'tittle' => 'LCD 20 VSP VS20', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '4'],
// ['image' => 'e2210h01-7272.jpg', 'tittle' => 'LCD VSP 22 Inch LED Monitor E2210H', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '4'],
// ['image' => '16-7627.jpg', 'tittle' => 'Thanh Lý Phòng Net A- Z Giá Cao Bình Dương', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '3'],
// ['image' => 'v2205h03-3230.jpg', 'tittle' => 'Màn Hình LED Monitor VSP 22inch V2205H', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '4'],
// ['image' => 'aeed8f8c5c9f96c1cf8e-4736.jpg', 'tittle' => 'Thanh Lý Phòng Net A- Z Giá Cao Khu Vực Miền Nam', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '3'],
// ['image' => 'v2408s02-7749.jpg', 'tittle' => 'Màn Hình Phẳng LED Tràn Viền Slim Bezel VSP V2408S', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '4'],
// ['image' => 'aaaa-2490.jpg', 'tittle' => 'Màn Hình ViewSonic VA2408-H 24" IPS 75Hz', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '4'],
// ['image' => '24-benq-6169.jpg', 'tittle' => 'Màn Hình BenQ GL2760H LED Full HD - 27 Inch', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '2'],
// ['image' => 'lcd-lg-24m47-7267', 'tittle' => 'Màn Hình LED LG 24 Inch 24M47VQ-P', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '2'],
// ['image' => 'man-hinh-aoc-22-6580.jpg', 'tittle' => 'LCD 22AOC 2270SW', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '2'],
// ['image' => '22-philip-ips-8145.jpg', 'tittle' => 'Màn Hình Máy Tính Philips 224E5QHSB', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '2'],
// ['image' => '23-aoc-1908.jpg', 'tittle' => 'Màn Hình Máy Tính AOC E2360SD 23 Inch LED', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '2'],
// ['image' => '31136nguonfsphydroseries700wmodelhd70000001-8749.jpg', 'tittle' => 'Nguồn FSP Power Supply HYDRO Series Model HD700 Active PFC (80 Plus Bronze/Màu Đen)', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '1'],
// ['image' => 'man-hinh-lcd-27-lg-27ea33va-ips-cu-black30201-6868.jpg', 'tittle' => 'Màn Hình LCD 27” LG 27EA33VA IPS', 'outstand' => true, 'display' => true, 'level2_product_id' => '', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '2'],



// ['image' => 'g5400v-6520.jpg', 'tittle' => 'GAMING HEADSET H120G HP', 'outstand' => true, 'display' => true, 'level2_product_id' => '42', 'seo_id' => '1', 'level1_products_id' => '5','level3_products_id' => ''],
// ['image' => 'linh-kien-laptop-hcm-hienlaptop-01-7371.png', 'tittle' => 'CHUYÊN NÂNG CẤP LAPTOP, THAY THẾ LINH KIỆN. GIÁ TỐT NHẤT BÌNH DƯƠNG', 'outstand' => true, 'display' => true, 'level2_product_id' => '40', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '6'],
// ['image' => 'heaphone-run-mus-k804-1-2320.jpg', 'tittle' => 'PHONE RUN MUS K8 LED GAMING', 'outstand' => true, 'display' => true, 'level2_product_id' => '42', 'seo_id' => '1', 'level3_products_id' => '', 'level1_products_id' => '5'],
