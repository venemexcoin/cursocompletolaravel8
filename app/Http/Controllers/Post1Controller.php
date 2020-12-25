<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post1;
use App\Models\Comment;

class Post1Controller extends Controller
{
    public function addPost1()
    {
        $post = New Post1();
        $post->title = "Second Post Title";
        $post->body = "Second Post Description";
        $post->save();
        return "Post has been created successfully!";
    }

    public function addComment($id)
    {
        $post = Post1::find($id);
        $comment = new Comment();
        $comment->comment = "This is first comment.";
        $post->comments()->save($comment);
        return "Comment has been posted";
    }

    public function getCommentsByPost($id)
    {
        $comments = Post1::find($id)->comments;
        return $comments;
    }
}
