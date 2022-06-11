<?php
    include "config.php";
    class Crud {

        public $table;
        private $conn = $connection;
        public function __construct($table){
            $this->table = $table;
        }

        public function insert($fields,$vals){
            $cols = "";
            $values = "";
            
            for($i = 0; $i < count($fields); $i++){

                $cols +=" ".$i;
            }

            for($i = 0; $i < count($vals); $i++){

                $values +=" ".$i;
            }

            $sql = "INSERT INTO ".$this->table."($cols) values($cols)";

            $query = mysqli_query($this->conn,$sql);

            if($query){
                return true;
            }else{
                return false;
            }
        }
        public function update($fields,$vals){
            $cols= "";
            $values = "";
            
            
        }
    }

    // $sql = "INSERT INTO users (name, email, password) VALUES ('John', 'codesval', '123456')";
?>