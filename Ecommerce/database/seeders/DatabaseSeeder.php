<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->Call(SectionSeeder::class);
        //$this->Call(CategorySeeder::class);
        //$this->Call(BrandsTableSeeder::class);  
       // $this->Call(SubCategoryTableSeeder::class);  
       // $this->Call(AdminTableSeeder::class);     
       //$this->Call(ProductsTableSeeder::class);  
       $this->Call(BannersTableSeeder::class);  
    }
}
