<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'manage_user']);
        Permission::create(['name' => 'manage_book']);
        Permission::create(['name' => 'read_books']);
        Permission::create(['name' => 'edit_profile']);

        $role_admin = Role::create(['name' => 'admin']);
        $role_admin->givePermissionTo(['edit_profile', 'manage_user']);

        $role_pustakawan = Role::create(['name' => 'pustakawan']);
        $role_pustakawan->givePermissionTo(['edit_profile', 'manage_book']);

        $role_anggota = Role::create(['name' => 'anggota']);
        $role_anggota->givePermissionTo(['edit_profile', 'read_books']);
    }
}
