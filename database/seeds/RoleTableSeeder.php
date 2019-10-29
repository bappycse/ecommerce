<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_customer = new Role();
        $role_customer->name = "customer";
        $role_customer->description = "A role for Customers";
        $role_customer->save();

        $role_admin = new Role();
        $role_admin->name = "admin";
        $role_admin->description = "A role for Admins";
        $role_admin->save();
    }
}