<?php 

   class Posts implements Iterator {
    
    public $var;
    private $posts = array();
    function __construct($posts){
        if(is_array(value: $posts)){
            $this->posts = $posts;
        }
    }
    
    public function current(){
        return current($this->posts);
    }
    
    public function next(){
        return next($this->posts);
    }
    
    public function key(){
        return key($this->posts);
    }
    
    public function valid(){
        return $this->current() !== false;
    }
    
    public function rewind(): void{
        reset($this->posts);
    }
    
   }