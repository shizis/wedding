<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $permissions = [
            'users.view',
            'users.create',
            'users.edit',
            'users.delete',
            'roles.view',
            'roles.create',
            'roles.edit',
            'roles.delete',
        ];

        foreach ($permissions as $key => $value) {
            Permission::create(['name' => $value]);
        }

        $superAdmin = Role::create(['name' => 'Super-Admin']);

        $shizi = User::factory()->create(
            [
                'name' => 'shizi',
                'password' => 'shizi2411',
                'email' => 'shizi@gmail.com'
            ]
        );
        $shizi->assignRole('Super-Admin');

        $user = Role::create(['name' => 'user']);
        $user->givePermissionTo('users.view');
        $user->givePermissionTo('roles.view');


    }
}
