<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Record = [
            ['id' =>1,'role_id' =>1, 'name' =>'Developer', 'username' =>'masteradmin','email'=>'admin@gmail.com','password' => '$2y$10$X6SUjH/mQVOFW.jjPuzqF.qTEJvw.u6RD8O41drXmbO9L.2zSHt5C','phone'=>'1234567890', 'phonecode'=>'+91','profile'=>'arrow.png','address'=>'Gandhinagar,Gujarat, India','ip_address'=>'192.168.1.1','device_type'=>'WEB',"status"=>1,'delete_status'=>0]    
        ];
        Admin::insert($Record);
    }
}
