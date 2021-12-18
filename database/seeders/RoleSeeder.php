<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'role_id'=>1,
            'email' => 'admin@gmail.com',
            'phone'=>'01234567890',
            'password' => Hash::make('password'),
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Admin',
           
            
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Home_Owener',
           
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Renter',
            
        ]);
    }
}
