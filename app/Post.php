<?php

namespace App;

class Post
{
   protected $fillable = ['title', 'content'];
    public function likes ()
    {
        return $this -> hasMany (' App \ Like ', ' post_id ');
    }
}