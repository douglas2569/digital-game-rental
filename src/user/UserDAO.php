<?php
require_once '../src/core/DataBase.php';
require_once '../src/user/User.php';

class UserDAO extends DataBase{

    function __construct(){
        parent::__construct();
    }

    function show(){
        $resulset = $this->retrieve('users'); 
        $dataList = array();

        if (is_null($resulset)) return $dataList;        

        foreach($resulset as $row){
            // echo $row['id']." ".$row['username']." ".$row['name']." ".$row['type']."<br>";                
            array_push($dataList, new User($row['id'], $row['username'], $row['name'], $row['type']));       
        }

        return $dataList;
    }
}