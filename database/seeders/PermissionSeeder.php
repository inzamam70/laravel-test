<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permission=[
            [
                'name'=>'customer'
            ],
            [
                'name'=>'categorys'
            ]
        ];
        foreach($permission as $key => $value){
            Permission::create($value);
        }
    }
}
