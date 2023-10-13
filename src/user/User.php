<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/user/UserDAO.php';
// require_once '../UserDAO.php';

class User{
    private $id;
    private $userName;
    private $name;
    private $password;
    private $type;
    private $hash;
    function __construct($id, $userName, $name, $type='', $password='', $hash=''){
        $this->setId($id);
        $this->setUserName($userName);
        $this->setName($name);
        $this->setPassword($password);
        $this->setType($type);
        $this->setHash($hash);
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
        // $password = trim($password); 

        $this->password = $password;        
    }

    function getPassword(){         

        return $this->password;
    }

    function getType(){

        return $this->type;
    }
    function setType($type){
        $type = trim($type); 

        $this->type = $type;        
    }

    function setHash($hash){
        // $password = trim($password); 

        $this->hash = $hash;        
    }

    function getHash(){         

        return $this->hash;
    }


    function toString(){

        return $this->id." | ".$this->userName." | ".$this->name." | ".$this->type;
    }
}
