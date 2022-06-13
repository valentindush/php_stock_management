<?php
    include 'config.php';
    class Crud {

        public $table;
        private $conn;
        public function __construct($table){
            $this->table = $table;
            $this->$conn = $connection;
        }

        public function insert($fields,$vals){
            $cols = join(",",$fields);
            $values = join(",",$vals);            

            $sql = "INSERT INTO ".$this->table."($cols) values($cols)";

            $query = mysqli_query($this->conn,$sql);

            if($query){
                return true;
            }else{
                return false;
            }
        }
        public function update($fields,$vals,$condition){
            $cols= "";
            $values = "";

            $cols = join(",", $fields);
            $values = join(",",$vals);

            if(count($fields) == count($vals)){

                $update_sql = "";
                $update_arr = [];

                for($i = 0; $i < count($fields);$i++){
                    array_push($update_arr,"$fields[$i] = $vals[$i]");

                }

                $update_sql = join(",",$update_arr);
                $sql = "ALTER TABLE ".$this->table."SET $update_sql WHERE $condition";
                
                $query = mysqli_query($this->conn,$sql);
                if($query){
                    return true;
                }else{
                    return false;
                }
            }
            
            
            
        }

        public function delete($condition){
            $sql = "DELETE FROM ".$this->table." WHERE ".$condition;
            $query =  mysqli_query($this->conn,$sql);
            if($query){
                return true;
            }else{
                return false;
            }
        }

        public function search($col,$val){
            $sql = "SELECT * FROM ".$this->table." WHERE ".$col." like %".$val."%";
        }

        public function getAll($col){
            $sql = "SELECT * FROM ".$this->table;
            $query = mysqli_query($this->conn,$sql);
            $data = [];

            if($query){
                while($row = mysqli_fetch_assoc($query)){
                    array_push($data,$row);
                }
                return $data;
            }else{
                return false;
            }
        }

        public function getOne($col,$val){
            $sql = "SELECT * FROM ".$this->table." WHERE ".$col." = ".$val;
            $query = mysqli_query($this->conn,$sql);
            if($query){
                return $query;
            }else{
                return false;
            }
        }

    }

    
?>