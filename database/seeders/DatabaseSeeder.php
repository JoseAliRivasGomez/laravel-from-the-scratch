<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);
        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies',
        ]);

        Post::create([
            'title' => 'My Family Post',
            'excerpt' => 'Excerpt for my post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'slug' => 'my-family-post',
            'category_id' => $personal->id,
            'user_id' => $user->id,
        ]);
        Post::create([
            'title' => 'My Work Post',
            'excerpt' => 'Excerpt for my post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'slug' => 'my-work-post',
            'category_id' => $work->id,
            'user_id' => $user->id,
        ]);
        Post::create([
            'title' => 'My Hobby Post',
            'excerpt' => 'Excerpt for my post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'slug' => 'my-hobby-post',
            'category_id' => $hobbies->id,
            'user_id' => $user->id,
        ]);
    }
}
