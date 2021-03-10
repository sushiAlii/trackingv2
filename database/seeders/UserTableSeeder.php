<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_office_id' => '1', 
            'name' => 'Ali', 
            'email' => 'aliasgar.laut@gmail.com', 
            'password' => bcrypt('password') 
        ]);

        User::create([
            'role_office_id' => '2', 
            'name' => 'Romel', 
            'email' => 'romel@gmail.com', 
            'password' => bcrypt('password') 
        ]);

        User::create([
            'role_office_id' => '3',
            'name' => 'Prince', 
            'email' => 'prince@gmail.com', 
            'password' => bcrypt('password') 
        ]);

        User::create([
            'role_office_id' => '4',
            'name' => 'Abdul', 
            'email' => 'abdul@gmail.com', 
            'password' => bcrypt('password') 
        ]);

        User::create([
            'role_office_id' => '5',
            'name' => 'Adel', 
            'email' => 'adel@gmail.com', 
            'password' => bcrypt('password') 
        ]);

        User::create([
            'role_office_id' => '6',
            'name' => 'Arif', 
            'email' => 'arif@gmail.com', 
            'password' => bcrypt('password') 
        ]);

        User::create([
            'role_office_id' => '7',
            'name' => 'Xela', 
            'email' => 'xela@gmail.com', 
            'password' => bcrypt('password') 
        ]);

        User::create([
            'role_office_id' => '8',
            'name' => 'Azra', 
            'email' => 'azra@gmail.com', 
            'password' => bcrypt('password') 
        ]);

        User::create([
            'role_office_id' => '9',
            'name' => 'Carlo', 
            'email' => 'carlo@gmail.com', 
            'password' => bcrypt('password') 
        ]);
    }
}
