<?php 
namespace App;
use App\User;
use App\Post;

class Author extends User
{
    public $posts = [];

   public function addPost(Post $post)
    {
        $this->posts[] = $post;
    }
}
