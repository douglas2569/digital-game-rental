<?php
require_once 'Connection.php';

class DataBase extends Connection{
    private $conn = null;

    function __construct(){        
        $this->conn = $this->conn();
    }


    function retrieve($table, $column=null, $value=null){
        $statement = null;
        try {
            if(is_null($column)){
                $statement = $this->conn->prepare("SELECT * FROM $table");
            }else{
                $statement = $this->conn->prepare("SELECT * FROM $table WHERE $column = ?");
                $statement->bind_param('s', $value);
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