<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 9; $i++) {
            Media::factory()->create([
                'path' => "storage/$i.jpg"
            ]);
        }

        Media::factory()->createMany([
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
    }
}
