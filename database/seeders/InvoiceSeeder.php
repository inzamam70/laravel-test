<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $invoice =[
            [
                
                'customer_id' => '1',
                'product_id' => '1',
                'quantity' => '2',
                'total' => '20000',
                'status' => '1',

            ],
            [
                
                'customer_id' => '2',
                'product_id' => '2',
                'quantity' => '3',
                'total' => '1500',
                'status' => '1',
            ],
        ];
        foreach($invoice as $key => $value){
            Invoice::create($value);
        }
    }
}
