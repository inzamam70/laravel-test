<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $customer =[
            [
                
                'name' => 'Admin',
                'email' => 'hi@gmail.com',
                'address' => 'Kathmandu',
                'phone_no' => '9843654789',
                'status' => '1',
            ],
            [
                
                'name' => 'User',
                'email' => 'hello@gmail.com',
                'address' => 'dhaka',
                'phone_no' => '98436547900',
                'status' => '1',
            ],
        ];
        foreach($customer as $key => $value){
            Customer::create($value);
        }
    }
}
