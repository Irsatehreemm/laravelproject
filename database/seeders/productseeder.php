<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name" => "oppo",
                "price" => "100000",
                "category" => "mobile",
                "gallery" => "https://opsg-img-cdn-gl.heytapimg.com/epb/202209/05/a0BEwERRnLO9I5At.png",
                "description" => "it is a mobile having the best quality"
            ],
            [
                "name" => "lenovo",
                "price" => "100000",
                "category" => "laptop",
                "gallery" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnBK1yE584jtWGw4i9HSkJn5CJ_BD6OmRLWp_eM80uOJjZ6w7nAL6lkhVPwoNaZNxLqQY&usqp=CAU",
                "description" => "it is a laptop having the best quality"
            ],
            [
                "name" => "LG lcd",
                "price" => "100000",
                "category" => "LCD",
                "gallery" => "https://lenovo.pk/wp-content/uploads/2022/04/mon1.webp",
                "description" => "it is a lcd having the best quality"
            ]
        ]);
    }
}
