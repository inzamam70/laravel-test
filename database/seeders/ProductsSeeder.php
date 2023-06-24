<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products =[
            [
                
                'name' => 'Mobile',
                'price' => '10000',
                'category_id' => '1',
                'status' => '1',

            ],
            [
                
                'name' => 'T-shirt',
                'price' => '500',
                'category_id' => '2',
                'status' => '1',
            ],
        ];
        foreach($products as $key => $value){
            Product::create($value);
        }
    }
}
