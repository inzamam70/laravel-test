<?php

namespace Pondit\Slider\Seip\Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Slider;
use Illuminate\Support\Str;

class SliderstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $slider =[
            [
                'uuid' => Str::random(10),
                'title' => 'No Doze Cafeteria',
                'path' => '/image/admin/carsol3.jpg',
                'alt' => 'alt1',
                'caption' => 'E-commerce Technology Is Your Best Bet To Grow',
                'updated_by' => 'raj@gmail.com',
                'created_by' => 'inzamam@gmail.com',
            ],
            [
                'uuid' => Str::random(10),
                'title' => 'Creative Food Plans',
                'path' => '/image/admin/cursol1.jpg',
                'alt' => 'alt2',
                'caption' => 'The Importance of Accepting Cultural Diversity in Workplace',
                'updated_by' => 'rokon@gmail.com',
                'created_by' => 'kotha@gmail.com',
            ],
            [
                'uuid' => Str::random(10),
                'title' => 'The Total Cafeteria',
                'path' => '/image/admin/carsol1.jpg',
                'alt' => 'alt3',
                'caption' => 'Email Marketing Is Bound To Make An Impact In Your Business',
                'updated_by' => 'neaz@gmail.com',
                'created_by' => 'noyon@gmail.com',
            ],
            [
                'uuid' => Str::random(10),
                'title' => 'The Total Cafeteria',
                'path' => '/image/admin/silder1.jpg',
                'alt' => 'alt3',
                'caption' => 'Email Marketing Is Bound To Make An Impact In Your Business',
                'updated_by' => 'neaz@gmail.com',
                'created_by' => 'noyon@gmail.com',
            ],
            [
                'uuid' => Str::random(10),
                'title' => 'The Total Cafeteria',
                'path' => '/image/admin/silider2.jpg',
                'alt' => 'alt3',
                'caption' => 'Email Marketing Is Bound To Make An Impact In Your Business',
                'updated_by' => 'neaz@gmail.com',
                'created_by' => 'noyon@gmail.com',
            ],
            [
                'uuid' => Str::random(10),
                'title' => 'The Total Cafeteria',
                'path' => '/image/admin/silder3.jpg',
                'alt' => 'alt3',
                'caption' => 'Email Marketing Is Bound To Make An Impact In Your Business',
                'updated_by' => 'fahad',
                'created_by' => 'ridoy'

                
            ]
        ];

        foreach($slider as $key => $value){
            Slider::create($value);
        }
    }
}
