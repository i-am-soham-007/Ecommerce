<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\models\SubCategory;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Record = [
            ['id' =>1, 'category_id' =>2, 'parent_id' =>0, 'section_id' =>1,"subcategory_name"=>"T-Shirts","subcategory_image"=>"","subcategory_discount"=>"0.00","description"=>"","url"=>"t-shirts","meta_title"=>"","meta_description"=>"","meta_keyword"=>"","status"=>1,"delete_status"=>1],
            ['id' =>2, 'category_id' =>2, 'parent_id' =>0, 'section_id' =>1,"subcategory_name"=>"Shirts","subcategory_image"=>"","subcategory_discount"=>"0.00","description"=>"","url"=>"casual-t-shirts","meta_title"=>"","meta_description"=>"","meta_keyword"=>"","status"=>1,"delete_status"=>1],
            ['id' =>3, 'category_id' =>2, 'parent_id' =>0, 'section_id' =>1,"subcategory_name"=>"Denims","subcategory_image"=>"","subcategory_discount"=>"0.00","description"=>"","url"=>"denims","meta_title"=>"","meta_description"=>"","meta_keyword"=>"","status"=>1,"delete_status"=>1]
        ];
        SubCategory::insert($Record);
    }
}
