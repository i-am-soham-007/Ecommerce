<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
         $sectionsRecord = [
            ['id' =>1,"category_name"=>"Mobiles","category_image"=>"","category_discount"=>"0.00","description"=>"","url"=>"mobiles","meta_title"=>"","meta_description"=>"","meta_keyword"=>"","status"=>1],
            ['id' =>2,"category_name"=>"Fashion","category_image"=>"","category_discount"=>"0.00","description"=>"","url"=>"fashion","meta_title"=>"","meta_description"=>"","meta_keyword"=>"","status"=>1],
            ['id' =>3,"category_name"=>"Electronics","category_image"=>"","category_discount"=>"0.00","description"=>"","url"=>"electronics","meta_title"=>"","meta_description"=>"","meta_keyword"=>"","status"=>1],
            ['id' =>4,"category_name"=>"Home","category_image"=>"","category_discount"=>"0.00","description"=>"","url"=>"home","meta_title"=>"","meta_description"=>"","meta_keyword"=>"","status"=>1],
            ['id' =>5,"category_name"=>"Appliances","category_image"=>"","category_discount"=>"0.00","description"=>"","url"=>"appliances","meta_title"=>"","meta_description"=>"","meta_keyword"=>"","status"=>1],
            ['id' =>6,"category_name"=>"Beaty, Toys & More","category_image"=>"","category_discount"=>"0.00","description"=>"","url"=>"beauty-toys-more","meta_title"=>"","meta_description"=>"","meta_keyword"=>"","status"=>1],
            ['id' =>7,"category_name"=>"Grocery","category_image"=>"","category_discount"=>"0.00","description"=>"","url"=>"grocery","meta_title"=>"","meta_description"=>"","meta_keyword"=>"","status"=>1]
        ];

        Category::insert($sectionsRecord);
    }
}
