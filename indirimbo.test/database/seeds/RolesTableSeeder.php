<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            //'RoleID'=>1,
            'RoleName'=>'Administrator'
        ]);
        Role::create([
            //'RoleID'=>2,
            'RoleName'=>'Editor'
        ]);  Role::create([
            //'RoleID'=>2,
            'RoleName'=>'Author'
        ]);  Role::create([
            //'RoleID'=>2,
            'RoleName'=>'Contributor'
        ]);  Role::create([
            //'RoleID'=>2,
            'RoleName'=>'Subscriber'
        ]);  Role::create([
            //'RoleID'=>2,
            'RoleName'=>'User'
        ]);
    }
}
