<?php

namespace App;
use App\Post;

class Category
{
    public $categoryName;
    public $posts = [];
    public function addPost(Post $post)
    {
        $this->posts[] = $post;
    }
}