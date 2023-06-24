<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Front_slider;

class FrontSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $slider =[
            [
                
                'title' => 'No Doze Cafeteria',
                'description' => 'egergwe',
                'image' => 'gfuasgfi',
                'user_id'=>'1'
                
            ],
          
        ];

        foreach($slider as $key => $value){
            Front_slider::create($value);
        }
    }
}
