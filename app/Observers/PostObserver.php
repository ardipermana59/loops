<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PostObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        // Create Slug from title
        $post->slug = Str::slug($post->title);
        $post->save();
    }
}
