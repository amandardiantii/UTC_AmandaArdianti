<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\Table;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 11; $i++) {
            PostCategory::create([
                "post_id" => $i,
                "category_id" => mt_rand(1,3)
            ]);
        }
    }
}
