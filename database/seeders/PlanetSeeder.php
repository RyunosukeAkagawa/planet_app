<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            [
            'name' => '水星',
            'name_en' => 'MERCURY',
            'radius' => '2439',
            'weight' => '3310',
            ],
            [
            'name' => '金星',
            'name_en' => 'VENUS',
            'radius' => '6052',
            'weight' => '48700',
            ],
            [
            'name' => '地球',
            'name_en' => 'EARTH',
            'radius' => '6378',
            'weight' => '59760',
            ],
            [
            'name' => '火星',
            'name_en' => 'MARS',
            'radius' => '3397',
            'weight' => '6420',
            ],
            [
            'name' => '木星',
            'name_en' => 'JUPITER',
            'radius' => '71492',
            'weight' => '18993500',
            ],
            [
            'name' => '土星',
            'name_en' => 'SATURN',
            'radius' => '60268',
            'weight' => '5685980',
            ],
            [
            'name' => '天王星',
            'name_en' => 'URANUS',
            'radius' => '25559',
            'weight' => '868910',
            ],
            [
            'name' => '海王星',
            'name_en' => 'NEPTUNE',
            'radius' => '24764',
            'weight' => '1029660',
            ]
        ];
        DB::table('planets')->insert($param);
    }
}
