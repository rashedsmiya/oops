<?php 
    
     
    namespace App;

    use App\Model\User;

    class Main {
        public $user;

        public function __construct(User $user)
        {
            $this->user = $user;
        }

        public function hello(): void
        {
            $this->user->display();
        }
    }