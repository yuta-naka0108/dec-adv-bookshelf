<?php
    session_start();

    class BookDatebase{
        private $servername = 'localhost';
        private $username = 'root';
        private $password = '';
        private $datebase = 'bookshelf';

        public $conn;
        public function __construct(){
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->datebase);
            
            if($this->conn->connect_error){
                echo "error in connecting to database";
            }

            return $this->conn;
        }
       
    }
?>