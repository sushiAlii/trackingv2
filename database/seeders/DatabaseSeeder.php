<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RoleTableSeeder::class);
        $this->call(OfficeTableSeeder::class);
        $this->call(RoleOfficeTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SourceOfFundTableSeeder::class);
        $this->call(PPMPTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(OrderDetailTableSeeder::class);
    }
}
