<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crochet')->insert([
                'title' => 'クラッシャーハットの作り方',
                'body' => 'あーあーあーあーあー',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        Post::factory()->count(10)->create();
    }

}