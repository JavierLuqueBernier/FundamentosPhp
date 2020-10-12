<?php

namespace App;

class Post{
    protected $comments = [];

    public function addComment($comment) {
        $this->comment[] = $comment;
    }

    public function countComments() {
        return count($this->comments);
    }

    public function getComments() {
        return $this->comments;
    }
}