<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(BookmarkSeeder::class);
        $this->call(LikeSeeder::class);
        $this->call(SummarySeeder::class);
        $this->call(SummaryImageSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(IngredientImageSeeder::class);
        $this->call(PatternSeeder::class);
        $this->call(PatternImageSeeder::class);
    }
}
