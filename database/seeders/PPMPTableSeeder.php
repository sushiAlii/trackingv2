<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ppmp;

class PPMPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ppmp::create([
            'title' => 'CSM Research Tools',
            'user_id'=> '5',
            'account_code' => '1BDC-84',
            'type' => 'PRIMARY',
            'status' => '0',
            'mode_of_procurement' => '',
            'source_of_fund_id' => '1',
        ]);

        ppmp::create([
            'title' => 'CCS Office Equipments',
            'user_id'=> '6',
            'account_code' => '4BBC-64',
            'type' => 'SUPPLEMENTARY',
            'status' => '0',
            'mode_of_procurement' => '',
            'source_of_fund_id' => '2',
        ]);

        ppmp::create([
            'title' => 'Palakasan Foods',
            'user_id'=> '7',
            'account_code' => '8BFE-69',
            'type' => 'PRIMARY',
            'status' => '0',
            'mode_of_procurement' => '',
            'source_of_fund_id' => '1',
        ]);

        ppmp::create([
            'title' => 'Biology Research Equipments',
            'user_id'=> '8',
            'account_code' => '3ABC-45',
            'type' => 'SUPPLEMENTARY',
            'status' => '0',
            'mode_of_procurement' => '',
            'source_of_fund_id' => '2',
        ]);

        ppmp::create([
            'title' => 'Palakasan Equipments',
            'user_id'=> '9',
            'account_code' => '6ASC-10',
            'type' => 'PRIMARY',
            'status' => '0',
            'mode_of_procurement' => '',
            'source_of_fund_id' => '1',
        ]);

        ppmp::create([
            'title' => 'Computer Lab Upgrade',
            'user_id'=> '5',
            'account_code' => '5HJG-67',
            'type' => 'PRIMARY',
            'status' => '0',
            'mode_of_procurement' => '',
            'source_of_fund_id' => '1',
        ]);

        ppmp::create([
            'title' => 'CCS Classroom Upgrade',
            'user_id'=> '5',
            'account_code' => '7BNM-41',
            'type' => 'SUPPLEMENTARY',
            'status' => '0',
            'mode_of_procurement' => '',
            'source_of_fund_id' => '2',
        ]);

    }
}
