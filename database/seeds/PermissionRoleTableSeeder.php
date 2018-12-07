<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create a role named admin
        $admin = Role::create(['name' => config('access.users.admin_role')]);

        // create a role named employee
        $employee = Role::create(['name' => config('access.users.employee_role')]);

        //view admin panel permission
        $permission='view backend';

        Permission::create(['name' => $permission ]);
        //give permissions to the admin
        $admin->givePermissionTo($permission);

        // give permissions to the employee
        $employee->givePermissionTo($permission);

        }






}
