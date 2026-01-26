<?php 

    class Database {
     
        public $driver;
        public $link;

        public function setDriver($driver){
             $this->driver = $driver;
        }

        public function connect($host, $user, $db, $pass){
            if($this->driver == 'mysql'){
                $mngmysql = new ManageMysql();
                $mngmysql->setHost($host);
                $mngmysql->setBD($db);
                $mngmysql->setUser($user);
                $mngmysql->setPass($pass); 
                $this->link = $mngmysql->connect();
                } elseif($this->driver == 'pgsql'){
                $mngmsqlite = new ManageSqlite();
                $mngmsqlite->setHost($host);
                $mngmsqlite->setBD($db);
                $mngmsqlite->setUser($user);
                $mngmsqlite->setPass($pass); 
                $this->link = $mngmsqlite->connect();
                }
        }
    }