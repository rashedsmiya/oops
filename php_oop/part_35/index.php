<?php 

    spl_autoload_register(function($class){
        require_once "classes/" . $class . ".php";
    });

    $post = new Post();
    $comment = new Comment();
    $post->filter();
    $comment->filter();

    if($BBCodeEnable == false && $EmoticonEnabled == false){
        $postContent = $post->getContent();
        $commentContent = $comment->getContent();

    } elseif($BBCodeEnable == true && $EmoticonEnabled == false){
       $bb = new BBCodeParser(object: $post);
       $postContent = $bb->getContent();

       $bb = new BBCodeParser($comment);
       $commentContent = $bb->getContent();
       
    } elseif($BBCodeEnabled == false && $EmoticonEnabled == false){
       $bb = new BBCodeParser($post);
       $postContent = $bb->getContent();

       $bb = new BBCodeParser($comment);
       $commentContent = $bb->getContent();
    }
    