<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 10; $i++) {
            Post::create([
                "title" => $faker->sentence(),
                "author" => $faker->name(),
                "desc" => $faker->paragraph(mt_rand(2,6),true),
                "date" => $faker->date(),
                "rating" => mt_rand(1,10),
                "image" => $faker->imageUrl(640, 480, 'book', true)
            ]);
        }
    }
}
