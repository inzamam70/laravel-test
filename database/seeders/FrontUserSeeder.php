<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Front_user;

class FrontUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $front_user =[
            [
                
                'name' => 'Admin',
                'email' => 'raj@gmail.com',
                'address' => 'Kathmandu',
                'phone_no' => '9843654789',
                'role_id' => '1',
                'status' => '1',

            ],
            [
                
                'name' => 'User',
                'email' => 'inzamam@gmail.com',
                'address' => 'dhaka',
                'phone_no' => '98436547900',
                'role_id' => '2',
                'status' => '1',
            ],
        ];
        foreach($front_user as $key => $value){
            Front_user::create($value);
        }
    }
}
