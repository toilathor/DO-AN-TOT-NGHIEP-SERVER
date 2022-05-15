<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\Workplace;
use Exception;
use Illuminate\Database\Seeder;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
//        'address' => "382 Nguyễn Trãi, P. TX Trung, Q. Thanh Xuân, Hà Nội",
//                'latitude' => random_int(200000000, 210000000) / pow(10, 7),
//                'longitude' => random_int(105000000, 106000000) / pow(10, 6),
        Facility::query()->insert([
            [
                "address" => "382 Nguyễn Trãi, Thanh Xuân Trung, Thanh Xuân, Hà Nội",
                "latitude" => "20.9939493",
                "longitude" => "105.805761",
                "description" => "Cạnh hầm chui Thanh Xuân, bên tay phải đi theo hướng về Hà Đông",
                "image" => "",
            ],
            [
                "address" => "391 Trương Định, P. Tân Mai, Q. Hoàng Mai, Hà Nội",
                "latitude" => "20.9866387",
                "longitude" => "105.8446148",
                "description" => "Cách trung tâm thương mại Trương Định plaza 100m bên tay phải theo hướng từ Trương Định đi Bạch Mai",
                "image" => "",
            ],
            [
                "address" => "168 Nguyễn Văn Cừ, P. Ngọc Lâm, Q. Long Biên, Hà Nội",
                "latitude" => "21.0435469",
                "longitude" => "105.8719355",
                "description" => "Đi từ cầu Chương Dương về đường Nguyễn Văn Cừ khoảng 0.8km bên tay phải, cách ngã ba Nguyễn Văn Cừ-Hồng Tiến 100m, cạnh Bibomart Nguyễn Văn Cừ",
                "image" => "",
            ],
            [
                "address" => "151 Cầu Giấy, Q. CG, P. Quan Hoa, Q. Cầu Giấy, Hà Nội",
                "latitude" => "21.0321688",
                "longitude" => "105.7967834",
                "description" => "Gần ngã tư đường Láng- Cầu Giấy cách 300m",
                "image" => "",
            ],
            [
                "address" => "346 Khâm Thiên, P. Thổ Quan, Q. Đống Đa, Hà Nội",
                "latitude" => "21.0195622",
                "longitude" => "105.8301141",
                "description" => "Đi vào 0.9 km từ ngã 5 Ô Chợ Dừa - Xã Đàn",
                "image" => "",
            ],
            [
                "address" => "407 Trường Chinh, P. Khương Trung, Q. Thanh Xuân, Hà Nội",
                "latitude" => "21.0025369",
                "longitude" => "105.8183259",
                "description" => "Đi từ hướng Nguyễn Trãi thì nằm bên tay phải rẽ vào đường Trường Chinh",
                "image" => "",
            ],
            [
                "address" => "56 Nguyễn Huy Tưởng, P. TX Trung, Q. Thanh Xuân, Hà Nội",
                "latitude" => "20.999179",
                "longitude" => "105.8046533",
                "description" => "Đối diện toà nhà chung cư Phú Gia",
                "image" => "",
            ],
            [
                "address" => "10 Trần Phú, P. Mộ Lao, Q. Hà Đông, Hà Nội",
                "latitude" => "20.983134",
                "longitude" => "105.7913148",
                "description" => "Số 10 Trần Phú - Gần toà nhà MacPlaza. Cách hầm chui Nguyễn Trãi 700m hướng về phía Hà Đông",
                "image" => "",
            ],
            [
                "address" => "235 Đội Cấn, P. Liễu Giai, Q. Ba Đình, Hà Nội",
                "latitude" => "21.0353145",
                "longitude" => "105.8194258",
                "description" => "Cách nhà khách La Thành 300m , bên tay phải đi theo hướng từ lăng Bác ra Văn Cao, Liễu Giai",
                "image" => "",
            ],
        ]);
    }
}
