<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $role3 = Role::create(['name' => 'Super-Admin']);

        $user = User::create([
            'nombre' => 'Mayra',
            'paterno' => 'Lizzet',
            'materno' => '',
            'email' => 'mayra@gmail.com',
            'telefono' => '',
            'password' => bcrypt('Mayra2022')
        ]);
        $user->assignRole($role3);

    }
}
