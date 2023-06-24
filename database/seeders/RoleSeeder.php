<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role =[
            [
                
                'name' => 'Admin',
                'can_update'=> '1',
                'can_view'=> '1',
                'can_create'=> '1',
                'status' => '1',

            ],
            [
                
                'name' => 'User',
                'can_update'=> '1',
                'can_view'=> '1',
                'can_create'=> '1',
                'status' => '1',
            ],
        ];
        foreach($role as $key => $value){
            Role::create($value);
        }
    }
}
