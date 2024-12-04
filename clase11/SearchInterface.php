<?php 

interface SearchInterface
{
    public function all();
}


class User implements SearchInterface
{
    public function all()
    {
        return "all users";
    }
}

class Post implements SearchInterface
{
    public function all()
    {
        return "all posts";
    }
}

$users = new User();
echo $users->all();
$posts = new Post();
echo $posts->all();