<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = array(
            array(
                'name' => 'Admin User',
                'email' => 'admin@ecom930.com',
                'password' => \Illuminate\Support\Facades\Hash::make('admin@1234'),
                'role' => 'admin',
                'status' => 'active',
            ),


            array(
                'name' => 'Seller One',
                'email' => 'sellerone@ecom930.com',
                'password' => \Illuminate\Support\Facades\Hash::make('seller@1234'),
                'role' => 'seller',
                'status' => 'active',
            ),
            array(
                'name' => 'Customer One',
                'email' => 'customerone@ecom930.com',
                'password' => \Illuminate\Support\Facades\Hash::make('user@1234'),
                'role' => 'user',
                'status' => 'active',
            )
        );

        DB::table('users')->insert($user_list);
    }
}
