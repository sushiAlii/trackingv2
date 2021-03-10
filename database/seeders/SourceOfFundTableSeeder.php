<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SourceOfFund;

class SourceOfFundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SourceOfFund::create([
            'code' => '1B2C',
            'description' => 'INCOME'
        ]);

        SourceOfFund::create([
            'code' => '1B2D',
            'description' => 'GAA'
        ]);
    }
}
