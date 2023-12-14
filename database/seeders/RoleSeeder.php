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
        Permission::create(['name' => 'user_management']);
        Permission::create(['name' => 'book_management']);
        Permission::create(['name' => 'view_books']);
        Permission::create(['name' => 'edit_profile']);

        $role_admin = Role::create(['name' => 'admin']);
        $role_admin->givePermissionTo(['edit_profile', 'user_management']);

        $role_pustakawan = Role::create(['name' => 'pustakawan']);
        $role_pustakawan->givePermissionTo(['edit_profile', 'book_management']);

        $role_anggota = Role::create(['name' => 'anggota']);
        $role_anggota->givePermissionTo(['edit_profile', 'view_books']);
    }
}
