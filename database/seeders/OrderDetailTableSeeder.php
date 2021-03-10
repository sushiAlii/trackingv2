<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetail::create([
            'product_id'=>4,
            'ppmp_id'=>1,
            'quantity'=>25,
        ]);

        OrderDetail::create([
            'product_id'=>5,
            'ppmp_id'=>1,
            'quantity'=>10,
        ]);

        OrderDetail::create([
            'product_id'=>1,
            'ppmp_id'=>1,
            'quantity'=>5,
        ]);

        OrderDetail::create([
            'product_id'=>1,
            'ppmp_id'=>2,
            'quantity'=>20,
        ]);

        OrderDetail::create([
            'product_id'=>7,
            'ppmp_id'=>2,
            'quantity'=>10,
        ]);

        OrderDetail::create([
            'product_id'=>11,
            'ppmp_id'=>2,
            'quantity'=>15,
        ]);

        OrderDetail::create([
            'product_id'=>14,
            'ppmp_id'=>3,
            'quantity'=>100,
        ]);

        OrderDetail::create([
            'product_id'=>15,
            'ppmp_id'=>3,
            'quantity'=>100,
        ]);

        OrderDetail::create([
            'product_id'=>4,
            'ppmp_id'=>4,
            'quantity'=>25,
        ]);

        OrderDetail::create([
            'product_id'=>5,
            'ppmp_id'=>4,
            'quantity'=>10,
        ]);

        OrderDetail::create([
            'product_id'=>6,
            'ppmp_id'=>4,
            'quantity'=>50,
        ]);

        OrderDetail::create([
            'product_id'=>12,
            'ppmp_id'=>5,
            'quantity'=>20,
        ]);

        OrderDetail::create([
            'product_id'=>5,
            'ppmp_id'=>5,
            'quantity'=>5,
        ]);

        OrderDetail::create([
            'product_id'=>7,
            'ppmp_id'=>5,
            'quantity'=>2,
        ]);

        OrderDetail::create([
            'product_id'=>11,
            'ppmp_id'=>5,
            'quantity'=>5,
        ]);

        OrderDetail::create([
            'product_id'=>3,
            'ppmp_id'=>6,
            'quantity'=>10,
        ]);

        OrderDetail::create([
            'product_id'=>2,
            'ppmp_id'=>6,
            'quantity'=>10,
        ]);

        OrderDetail::create([
            'product_id'=>10,
            'ppmp_id'=>6,
            'quantity'=>1,
        ]);

        OrderDetail::create([
            'product_id'=>2,
            'ppmp_id'=>7,
            'quantity'=>20,
        ]);

        OrderDetail::create([
            'product_id'=>10,
            'ppmp_id'=>7,
            'quantity'=>2,
        ]);

        OrderDetail::create([
            'product_id'=>9,
            'ppmp_id'=>7,
            'quantity'=>3,
        ]);
    }
}
