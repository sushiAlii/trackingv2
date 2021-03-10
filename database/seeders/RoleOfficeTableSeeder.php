<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoleOffice;

class RoleOfficeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleOffice::create([
            'role_id' => '1',
            'office_id' => '1'
        ]);

        RoleOffice::create([
            'role_id' => '2',
            'office_id' => '1'
        ]);

        RoleOffice::create([
            'role_id' => '3',
            'office_id' => '2'
        ]);

        RoleOffice::create([
            'role_id' => '3',
            'office_id' => '3'
        ]);

        RoleOffice::create([
            'role_id' => '4',
            'office_id' => '4'
        ]);

        RoleOffice::create([
            'role_id' => '4',
            'office_id' => '5'
        ]);
        RoleOffice::create([
            'role_id' => '4',
            'office_id' => '6'
        ]);
        RoleOffice::create([
            'role_id' => '4',
            'office_id' => '7'
        ]);
        RoleOffice::create([
            'role_id' => '4',
            'office_id' => '8'
        ]);
    }
}
