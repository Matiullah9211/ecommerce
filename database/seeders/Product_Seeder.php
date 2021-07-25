<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class Product_Seeder extends Seeder
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
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>'https://micromaxinfo.com/pub/media/wysiwyg/images/note1b.png',
            
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"400",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>'https://images.samsung.com/is/image/samsung/p6pim/in/ua55aue70aklxl/gallery/in-uhd-4k-tv-ua55aue70aklxl-front--gray-436254957?$720_576_PNG$',
            ],
            [
                'name'=>'Soni Tv',
                "price"=>"500",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>'https://images.samsung.com/is/image/samsung/p6pim/in/ua55aue70aklxl/gallery/in-uhd-4k-tv-ua55aue70aklxl-front--gray-436254957?$720_576_PNG$',
            ],
            [
                'name'=>'LG fridge',
                "price"=>"200",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>'https://www.thechennaimobiles.com/image/cache/catalog/f19p-slr-600x600.jpg',
            ],

        ]);

        DB::table('products')->insert([
            'name' => 'iphone',
            'price' => '29099',
            'description' =>'its amzings tv 2021',
            'gallery' => 'https://micromaxinfo.com/pub/media/wysiwyg/images/note1b.png',
        ]);
    }
}
