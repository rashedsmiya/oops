<?php 

    class Emoticon {
        private $post;   
        
        public function __construct($object) {
            $this->post = $object;
        }

        public function getContent(){
            $this->post->filter();
            $content = $this->parseEmoticon(content: $this->post->getContent());
            return $content;
        }

        private function parseEmoticon($content) {
             
            // Your Coding process will be go here....
        }
    }

