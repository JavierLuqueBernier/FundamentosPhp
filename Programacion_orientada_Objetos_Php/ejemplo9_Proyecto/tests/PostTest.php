<?php

use PHPUnit\Framework\TestCase;
use App\Post;                       //El problema está aqui, por el motivo que sea, este use, no encuentra la clase Post creada en Post.php
use App\Comment;

class PostTest extends TestCase {
    public function test_add_comment_to_post() {
        $post = new Post();
        $comment = new Comment();

        $post->addComment($comment);

        $this->assertEquals(1, $post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComment()[0]);
    }
}