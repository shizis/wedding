<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 9; $i++) {
            Media::create([
                'path' => "storage/$i.jpg"
            ]);
        }

        Media::create([
            [
                'path' => 'storage/main_image_4.jpg'
            ],
            [
                'path' => 'storage/profile_1.jpg'
            ],
            [
                'path' => 'storage/profile_2.jpg'
            ],
        ]);

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

        $shizi = User::create(
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
