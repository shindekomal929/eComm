<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
            'price'=>'500',
            'description'=>'A smartphone with 8gb ram and much more feature',
            'catrgory'=>'mobile',
            'gallery'=>'https://www.lg.com/in/images/mobile-phones/md07519000/gallery/LMK315IM-DZ-01.jpg',
           
            ],
            [
                'name'=>'Panasonic Tv',
            'price'=>'400',
            'description'=>'A smart tv with much more feature',
            'catrgory'=>'tv',
            'gallery'=>'https://www.lg.com/in/images/tvs/md07511882/gallery/32LM565BPTA-DZ-01.jpg',
           
            ],
            [
                'name'=>'Soni Tv',
            'price'=>'600',
            'description'=>'A tv with much more feature',
            'catrgory'=>'tv',
            'gallery'=>'https://www.lg.com/in/images/tvs/md07504663/gallery/OLED77CXPTA-1600-01-v1.jpg',
           
            ],
            [
                'name'=>'fridge',
            'price'=>'800',
            'description'=>'A fridge with much more feature',
            'catrgory'=>'tv',
            'gallery'=>'https://www.lg.com/in/images/refrigerators/md06236776/gallery/GL-T292RBC3-Refrigerators-Front-View-Top-Door-Open-Without-Content-DZ-05.jpg',
           
            ]
        ]);
    }
}
