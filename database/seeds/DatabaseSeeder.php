<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'مهدی خورشیدی',
            'email' => 'mahdikhorshidi@gmail.com',
            'password' => bcrypt('babish123'),
        ]);
        $role = Role::create(['name' => 'مدیر فنی']);
        $permission = Permission::create(['name' => 'user list']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'user show']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'user create']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'user edit']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'user delete']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'role list']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'role show']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'role create']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'role edit']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'role delete']);
        $role->givePermissionTo($permission);
        $role = Role::create(['name' => 'مدیریت']);
    }
}
