<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id', 'name', 'email', 'website', 'comment'
    ];

     /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}   
