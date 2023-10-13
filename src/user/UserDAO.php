<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/core/DataBase.php';
// require_once  dirname(__FILE__).'../../core/DataBase.php';
require_once 'User.php';

class UserDAO extends DataBase{

    function __construct(){
        parent::__construct();
    }

    function show(){
        $resulset = $this->retrieve('users'); 
        $dataList = array();

        if (is_null($resulset)) return $dataList;        

        foreach($resulset as $row){                           
            array_push($dataList, new User($row['id'], $row['username'], $row['name'], $row['type']));       
        }

        return $dataList;
    }

    function login($username, $password){        
        $dataList = array();  
        $resulset = $this->retrieve('users', array('username'), array($username));         
        
        if(!is_null($resulset) && $resulset->num_rows > 0){
            foreach($resulset as $row){                           
                array_push($dataList, new User($row['id'], $row['username'], $row['name'], $row['type'], $row['password'], $row['hash']));                       
            }           

            if(!password_verify($password, $dataList[0]->getPassword())){
                $dataList = array();                
            }
        }         
        
        
        return $dataList;
    }


}