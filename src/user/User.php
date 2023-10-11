<?php
require_once '../src/user/UserDAO.php';

class User{
    private $id;
    private $userName;
    private $name;
    private $password;
    private $type;
    function __construct($id, $userName, $name, $type='', $password=''){
        $this->setId($id);
        $this->setUserName($userName);
        $this->setName($name);
        $this->setPassword($password);
        $this->setType($type);
    }
       

    function getId(){
        return $this->id;
    }   
    function setId($id){
        $id = trim($id);  

        $this->id = $id;        
    }

    function getUserName(){
        
        return $this->userName;
    }

    function setUserName($userName){
        $userName = trim($userName); 

        $this->userName = $userName;        
    }
    function getName(){

        return $this->userName;
    }

    function setName($name){
        $name = trim($name); 

        $this->name = $name;        
    }
    
    function setPassword($password){
        $password = trim($password); 

        $this->password = $password;        
    }

    function getType(){

        return $this->type;
    }
    function setType($type){
        $type = trim($type); 

        $this->type = $type;        
    }

    function toString(){

        return $this->id." | ".$this->userName." | ".$this->name." | ".$this->type;
    }
}
