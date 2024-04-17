<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        $categories = Category::all();
        $users = User::all();

        for ($i = 1; $i <= 20; $i++) {
            Post::create([
                'title' => "Post $i",
                'description' => "This is the body of Post $i",
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
