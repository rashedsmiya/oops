<?php 

    class BBCodeParser {
        private $post;   
        
        public function __construct($object) {
            $this->post = $object;
        }
        public function getContent(){
            
            $this->post->filter();
            $content = $this->parseBBCode(content: $this->post->getContent());
            return $content;
        }
        private function parseBBCode($content) {
             
            // Your Coding process will be go here....
        }
    }    

