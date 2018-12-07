<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //assign adminRole to the admin user
        User::find(1)->assignRole(config('access.users.admin_role'));

        //assign employeeRole to the second user
        User::find(2)->assignRole(config('access.users.employee_role'));

    }
}
