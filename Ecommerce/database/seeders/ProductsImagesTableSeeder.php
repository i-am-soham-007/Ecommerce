<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductsImage;
class ProductsImagesTableSeeder extends Seeder
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
            ['id' =>1, 'product_id' =>1, 'image'=>'unnamed.png-2776.png',"status"=>1]
    
        ];
        ProductsImage::insert($Record);
    }
}
