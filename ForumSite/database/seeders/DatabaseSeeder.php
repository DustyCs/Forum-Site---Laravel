<?php

namespace Database\Seeders;

use App\Models\ForumPosts;
use App\Models\User;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        ForumPosts::factory(10)->create();
        // ForumPosts::
        DB::table("forum_posts_comments")->insert(['comment' => Str::random(10)]); // useful to access since i cant access it from ForumPosts::factory(10)->create();
    }
}
