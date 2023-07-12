<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Insertar los posts en la base de datos
        for ($i = 1; $i <= 10; $i++) {
            Post::create([
                'title' => $faker->sentence(3),
                'content' => $faker->paragraph(50),
            ]);
        }
    }
}
