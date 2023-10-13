<?php
require_once 'Connection.php';

class DataBase extends Connection{
    private $conn = null;

    function __construct(){        
        $this->conn = $this->conn();
    }


    function retrieve($table, $column=array(), $value=array(), $operator='AND'){
        $statement = null;
        
        try {
            if(count($column) <= 0){
                $statement = $this->conn->prepare("SELECT * FROM $table");
            }else{
                if(count($column) > 1){
                    $statement = $this->conn->prepare("SELECT * FROM $table WHERE $column[0] = ? $operator $column[1] = ?");
                    $statement->bind_param('ss', $value[0], $value[1]);
                    
                }else{                                        
                    $statement = $this->conn->prepare("SELECT * FROM $table WHERE $column[0] = ?");
                    $statement->bind_param('s', $value[0]);
                }
            }

            $statement->execute();
            return $statement->get_result();

        } catch (mysqli_sql_exception $e) {
            echo 'Falha na consulta'."</br>";            
        }
        

    }
    
    function insert($sql){

    }

    public function edit($sql){

    }

    public function delete($sql){

    }
}