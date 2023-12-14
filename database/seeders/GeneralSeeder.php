<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_pustakawan = Role::create([
            'name' => 'admin'
        ]);

        $role_anggota = Role::create([
            'name' => 'anggota'
        ]);

        Permission::create([
            'name' => 'create_book'
        ]);
        Permission::create([
            'name' => 'update'
        ]);
        Permission::create([
            'name' => 'read'
        ]);
        Permission::create([
            'name' => 'delete'
        ]);

        $role_pustakawan->givePermissionTo('read');
        $role_pustakawan->givePermissionTo('update');
        $role_pustakawan->givePermissionTo('delete');
        $role_pustakawan->givePermissionTo('create');
        $role_anggota->givePermissionTo('read');

        $anggota = User::create([
            'username' => 'Anggota 1',
            'name' => 'Anggota 1',
            'email' => 'anggota@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $anggota->assignRole('anggota');


        $admin = User::create([
            'username' => 'Pustakawan',
            'name' => 'Pustakawan',
            'email' => 'pustakawan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $admin->assignRole('pustakawan');
    }
}
