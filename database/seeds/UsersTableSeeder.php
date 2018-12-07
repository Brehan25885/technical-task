<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add the master administrator, user id of 1
        User::create([
            'name'              => 'Admin',
            'email'             => 'admin@admin.com',
            'password'          =>  Hash::make('123456'),
            'email_verified_at' => now(),
            'phone'             => 01231231231,
            'address'           => 'exampleStreet',
            'remember_token'    => str_random(10),

        ]);

        // Add an employee can view the admin panel

        User::create([
            'name'              => 'employee',
            'email'             => 'employee@employee.com',
            'password'          =>  Hash::make('123456'),
            'email_verified_at' => now(),
            'phone'             => 01231231232,
            'address'           => 'exampleStreet',
            'remember_token'    => str_random(10),

        ]);

        //Normal user can't view the admin panel
        User::create([
            'name'              => 'customer',
            'email'             => 'customer@customer.com',
            'password'          => Hash::make('123456'),
            'email_verified_at' => now(),
            'phone'             => 01231231233,
            'address'           => 'exampleStreet',
            'remember_token'    => str_random(10),

        ]);
    }
}
