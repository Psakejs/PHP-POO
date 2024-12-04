<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    private $post;

    protected function setUp(): void
    {
        $this->post = new Post();
    }

    public function testNewPostHasNoComments()
    {
        $this->assertEquals(0, $this->post->countComments());
        $this->assertEmpty($this->post->getComments());
    }

    public function testCanAddComment()
    {
        $comment = new Comment();
        $this->post->addComment($comment);
        
        $this->assertEquals(1, $this->post->countComments());
        $this->assertCount(1, $this->post->getComments());
        $this->assertSame($comment, $this->post->getComments()[0]);
    }

    public function testCanAddMultipleComments()
    {
        $comment1 = new Comment();
        $comment2 = new Comment();
        $comment3 = new Comment();

        $this->post->addComment($comment1);
        $this->post->addComment($comment2);
        $this->post->addComment($comment3);

        $this->assertEquals(3, $this->post->countComments());
        $this->assertCount(3, $this->post->getComments());
        $this->assertContains($comment1, $this->post->getComments());
        $this->assertContains($comment2, $this->post->getComments());
        $this->assertContains($comment3, $this->post->getComments());
    }
}
