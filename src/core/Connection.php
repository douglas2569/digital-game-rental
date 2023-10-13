<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php';
// require_once '../../../config/config.php';

Class Connection{

    public function conn(){
        $conn = null;

        try {
            $conn = new mysqli(HOST, USER, PASSWORD, DB_NAME);
            
        } catch (mysqli_sql_exception $e) {
            echo 'Falha na conexão com o banco de dados';          
        }            
        
        
        return $conn;
    }
}