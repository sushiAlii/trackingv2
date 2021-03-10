<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Office;

class OfficeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create([
            'office_name' => 'PSD Office'
        ]);

        Office::create([
            'office_name' => 'BAC Office'
        ]);

        Office::create([
            'office_name' => 'OVCAF'
        ]);

        Office::create([
            'office_name' => 'CSM Office'
        ]);

        Office::create([
            'office_name' => 'CBAA Office'
        ]);

        Office::create([
            'office_name' => 'CCS Office'
        ]);

        Office::create([
            'office_name' => 'CASS Office'
        ]);
        
        Office::create([
            'office_name' => 'DSA Office'
        ]);
    }
}
