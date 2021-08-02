<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;
class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $Record = [
            ['id' =>1,"image"=>"banner1.jpg","link"=>"","title"=>"Black Jacket","alt"=>"Black Jacket","status"=>1],
            ['id' =>2,"image"=>"banner2.jpg","link"=>"","title"=>"Full Sleeve T-Shirt","alt"=>"Full Sleeve T-Shirt","status"=>1],
            ['id' =>3,"image"=>"banner3.jpg","link"=>"","title"=>"Half Sleeve T-Shirt","alt"=>"Half Sleeve T-Shirt","status"=>1]
        ];

        Banner::insert($Record);
    }
}
