<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            ['name' => 'Samsung',
            'price' => '39,999',
            'category' => 'Mobile phone',
            'description' => 'A samrtphone with 4gb of Ram and much more',
            'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9vfavZ_9wQEIL7rDmXjtRic4Ful4TSnQj1g&usqp=CAU',
        ],
        [
            'name' => 'oppo',
            'price' => '49,999',
            'category' => 'Mobile phone',
            'description' => 'A samrtphone with 6gb of Ram and much more',
            'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBayafbparA7lfIULsunFF2HSMNseVT7ChHg&usqp=CAU',
        ],
        [
            'name' => 'TV',
            'price' => '29,999',
            'category' => 'Smart TV',
            'description' => 'TV with High Quality Display',
            'gallery' => 'https://www.sony.com/image/916e1ca5c3b64c3947acae853da7ad07?fmt=pjpeg&bgcolor=FFFFFF&bgc=FFFFFF&wid=2515&hei=1320',
        
        ],
        ]);
    }
}