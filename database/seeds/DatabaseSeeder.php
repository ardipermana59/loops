<?php

use App\Models\User;
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
        /**
         * Seed 50 User Random.
         * Seed 50 Post Random.
         * Seed 10 Comment each Post.
         */
        factory(App\Models\User::class, 50)->create()->each(function ($user) {
            $post =  factory(App\Models\Post::class,1)->create(['user_id' => $user->id]);
            $post->each(function ($post) {
                factory(App\Models\Comment::class,10)->create(['post_id' => $post->id]);
            });
        });
    }
}
