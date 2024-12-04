
<?php
use PHPUnit\Framework\TestCase;
use App\User;
use App\Author;
use App\Post;
use App\Category;

class UserPostTest extends TestCase
{
    private Author $author;
    private Category $category;

    protected function setUp(): void
    {
        $this->author = new Author();
        $this->author->name = "John Doe";
        $this->author->age = 30;

        $this->category = new Category();
        $this->category->categoryName = "Technology";
    }

    /**
     * @dataProvider postProvider
     */
    public function testPostCreation(string $title, string $content)
    {
        $post = $this->createPost($title, $content);
        $this->assertEquals($title, $post->title);
        $this->assertEquals($content, $post->content);
    }

    public function testAuthorAddPost()
    {
        $post = $this->createPost("First Post", "This is the first post");
        $this->author->addPost($post);
        
        $this->assertCount(1, $this->author->posts);
        $this->assertEquals("First Post", $this->author->posts[0]->title);
    }

    public function testAuthorMultiplePosts()
    {
        $posts = [
            $this->createPost("First Post", "This is the first post"),
            $this->createPost("Second Post", "This is the second post")
        ];
        
        $this->addPostsToAuthor($this->author, $posts);

        $this->assertCount(2, $this->author->posts);
        $this->assertEquals("First Post", $this->author->posts[0]->title);
        $this->assertEquals("Second Post", $this->author->posts[1]->title);
    }

    public function testCategoryAddPost()
    {
        $post = $this->createPost("First Post", "This is the first post");
        $this->category->addPost($post);

        $this->assertCount(1, $this->category->posts);
        $this->assertEquals("First Post", $this->category->posts[0]->title);
    }

    public function testCategoryMultiplePosts()
    {
        $posts = [
            $this->createPost("First Post", "This is the first post"),
            $this->createPost("Second Post", "This is the second post")
        ];

        foreach ($posts as $post) {
            $this->category->addPost($post);
        }

        $this->assertCount(2, $this->category->posts);
        $this->assertEquals("First Post", $this->category->posts[0]->title);
        $this->assertEquals("Second Post", $this->category->posts[1]->title);
    }

    public function testAuthorCategoryIntegration()
    {
        $posts = [
            $this->createPost("First Post", "This is the first post"),
            $this->createPost("Second Post", "This is the second post")
        ];

        $this->addPostsToAuthor($this->author, $posts);
        foreach ($posts as $post) {
            $this->category->addPost($post);
        }

        $this->assertCount(2, $this->author->posts);
        $this->assertCount(2, $this->category->posts);
        $this->assertEquals("First Post", $this->author->posts[0]->title);
        $this->assertEquals("Second Post", $this->category->posts[1]->title);
    }

    private function createPost(string $title, string $content): Post
    {
        return new Post($title, $content);
    }

    private function addPostsToAuthor(Author $author, array $posts): void
    {
        foreach ($posts as $post) {
            $author->addPost($post);
        }
    }

    public function postProvider(): array
    {
        return [
            ['Test Title', 'This is the content'],
            ['First Post', 'This is the first post'],
            ['Second Post', 'This is the second post']
        ];
    }
}
