<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Office Chair',
            'type'=>1,
            'price'=>2500.00,
        ]);

        Product::create([
            'name'=>'Classroom Chair',
            'type'=>1,
            'price'=>2000.00,
        ]);

        Product::create([
            'name'=>'Computer Unit',
            'type'=>1,
            'price'=>15000.00,
        ]);
        
        Product::create([
            'name'=>'Test Tube',
            'type'=>1,
            'price'=>900.00,
        ]);

        Product::create([
            'name'=>'Bunsen Burner',
            'type'=>1,
            'price'=>1200.00,
        ]);

        Product::create([
            'name'=>'Dishwashing Materials',
            'type'=>1,
            'price'=>100.00,
        ]);

        Product::create([
            'name'=>'G-Tech Marker',
            'type'=>1,
            'price'=>3400.00,
        ]);

        Product::create([
            'name'=>'RJ45 Wire',
            'type'=>1,
            'price'=>500.00,
        ]);

        Product::create([
            'name'=>'Electric Fan',
            'type'=>1,
            'price'=>15000.00,
        ]);

        Product::create([
            'name'=>'Air Conditioner Machine',
            'type'=>1,
            'price'=>3500.00,
        ]);

        Product::create([
            'name'=>'A4 Bondpaper',
            'type'=>1,
            'price'=>1000.00,
        ]);

        Product::create([
            'name'=>'Yellow Intermediate Paper',
            'type'=>1,
            'price'=>100.00,
        ]);

        Product::create([
            'name'=>'Jollibee Burger Steak',
            'type'=>1,
            'price'=>65.00,
        ]);

        Product::create([
            'name'=>'Mcdonalds Fries',
            'type'=>1,
            'price'=>95.00,
        ]);

        Product::create([
            'name'=>'Mcdonalds Burger',
            'type'=>1,
            'price'=>100.00,
        ]);
    }
}
