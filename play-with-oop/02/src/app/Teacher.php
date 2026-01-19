<?php 

    namespace App;

    use App\Model\User;

    class Teacher extends User 
    {
        public $salary = 70000;

        public function getSalary(): int
        {
            return (int) $this->salary;
        }
    }
        