<?php 

    spl_autoload_register(function ($class_name) {
        require_once 'classes/' . $class_name . '.php';
    });
    
    $blogPost = getAllPost();
    $posts = new Posts();
     foreach ($posts as $post){
        echo $post->getTitle();
        echo $post->getContent();
        echo $post->getDate(); 
        $comments = new comments($post->getComments());
        foreach ($comments as $comment){
             echo $comment->getCommentAuthor();
             echo $comment->getCommentContent();
        }
     }
    
