<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            [
                'name' => 'oide_muscle',
                'descliption' => '大出さん筋トレ中',
                'image' => '97FD5592-C1F1-4004-A708-620D6495287C_1_105_c.jpeg',
                'price' => 5000000
            ],

            [
                'name' => 'oide_coffee',
                'descliption' => '大出さんが作ったコーヒーです',
                'image' => '97FD5592-C1F1-4004-A708-620D6495287C_1_105_c.jpeg',
                'price' => 500


            ]


        ];

        DB::table('products')->insert($params);
    }
}
