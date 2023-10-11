<?php
require_once '../core/DataBase.php';

class UserDAO extends DataBase{

    function __construct(){
        parent::__construct();
    }

    function show(){
        $resulset = $this->retrieve('usuarios'); 
        $dataList = array();

        if (is_null($resulset)) return $dataList;        

        foreach($resulset as $row){
            array_push($dataList, $row);
        }

        return $dataList;
    }
}

$user = new UserDAO();
print_r($user->show());