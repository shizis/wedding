<?php

namespace Database\Seeders;

use App\Models\Media;
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
        for ($i = 1; $i <= 9; $i++) {
            Media::factory()->create([
                'path' => "images/$i.jpg"
            ]);
        }

        Media::factory()->createMany([
            [
                'path' => 'images/main_image_4.jpg'
            ],
            [
                'path' => 'images/profile_1.jpg'
            ],
            [
                'path' => 'images/profile_2.jpg'
            ],
        ]);

        $permissions = [
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
        $user->givePermissionTo('roles.view');


    }
}
