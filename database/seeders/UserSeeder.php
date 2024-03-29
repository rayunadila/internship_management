<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('dpubmtr123')
        ]);

        $role = Role::create(['name' => 'Admin']);

        // Role Mahasiswa
        Role::create(['name' => 'Peserta Magang']);

        // Role Calon Magang
        Role::create(['name' => 'Calon Magang']);

        // Role Sekretaris
        Role::create(['name' => 'Sekretaris']);


        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
