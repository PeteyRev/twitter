<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** 
     * Get the user of the subbreddit.
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
    /** 
     * Get the likes for the post.
     */
    public function likes() 
    {
        return $this->belongsToMany('\App\User');
    }
}
