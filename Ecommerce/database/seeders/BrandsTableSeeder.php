<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Brand;
class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $Record = [
            ['id' =>1, 'name' =>'Arrow', 'logo'=>'arrow.png',"status"=>1],
            ['id' =>2, 'name' =>'Gap', 'logo'=>'gap.png',"status"=>1],
            ['id' =>3, 'name' =>'Lee', 'logo'=>'lee.png',"status"=>1],
            ['id' =>4, 'name' =>'Monte Carlo', 'logo'=>'montecarlo.png',"status"=>1],
            ['id' =>5, 'name' =>'Peter England', 'logo'=>'peter-england.png',"status"=>1]    
        ];
        Brand::insert($Record);
    }
}
