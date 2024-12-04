<?php 

require __DIR__.'./vendor/autoload.php';
use App\User;
use App\Author;
use App\Post;
use App\Category;


$author = new Author();
$author->name = 'John Doe';
$author->age = 30;
$post1 = new Post('First Post', 'This is the first post');
$post2 = new Post('Second Post', 'This is the second post');
$author->addPost($post1);
$author->addPost($post2);
$category = new Category();
$category->categoryName = 'Technology';
$category->addPost($post1);
$category->addPost($post2);
echo "Author: " . $author->name . "<br>";
echo "Age: " . $author->age . "<br>";
echo "Posts:<br>";
foreach ($author->posts as $post) {
    echo "- " . $post->title . "<br>";
}
echo "Category: " . $category->categoryName . "<br>";
echo "Posts:<br>";
foreach ($category->posts as $post) {
    echo "- " . $post->title . "<br>";
}


