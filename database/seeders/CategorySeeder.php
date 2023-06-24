<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category =[
            [
                
                'name' => 'Electronics',
                'status' => '1',

            ],
            [
                
                'name' => 'Clothes',
                'status' => '1',
            ],
        ];
        foreach($category as $key => $value){
            Category::create($value);
        }
    }
}
