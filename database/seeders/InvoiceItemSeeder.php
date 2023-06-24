<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InvoiceItem;

class InvoiceItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $invoice_item =[
            [
                
                'invoice_id' => '1',
                'product_id' => '1',
                'quantity' => '2',
                'total' => '20000',
                'status' => '1',

            ],
            [
                
                'invoice_id' => '2',
                'product_id' => '2',
                'quantity' => '3',
                'total' => '1500',
                'status' => '1',
            ],
        ];
        foreach($invoice_item as $key => $value){
            InvoiceItem::create($value);
        }
    }
}
