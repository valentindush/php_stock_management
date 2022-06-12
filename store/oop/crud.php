<?php
    include "config.php";
    class Crud {

        public $table;
        private $conn = $connection;
        public function __construct($table){
            $this->table = $table;
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
                
            }
            
            
            
        }

        public function delete($id,$condition){
            $sql = "DELETE FROM ".$this->table." WHERE ".$condition;
        }

        public function search($col,$val){
            $sql = "SELECT * FROM ".$this->table." WHERE ".$col." like %".$val."%";
        }

    }

    
?>