<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/game/GameDAO.php';

class Game{
    private $id;    
    private $name;
    private $description;
    private $raing;
    private $cover;
    private $producerFK;
    private $genderFK;
    function __construct($id, $name, $description, $raing, $cover, $producerFK, $genderFK){
        $this->setId($id);
        $this->setName($name);
        $this->setDescription($description);
        $this->setRaing($raing);
        $this->setCover($cover);
        $this->setProducerFK($producerFK);
        $this->setGenderFK($genderFK);
    }   
    
    function getId(){
        return $this->id;
    }   
    function setId($id){         

        $this->id = $id;        
    }

    function getName(){
        return $this->name;
    }   
    function setName($name){         

        $this->name = $name;        
    }

    function getDescription(){
        return $this->description;
    }   
    function setDescription($description){         

        $this->description = $description;        
    }

    function getRaing(){
        return $this->raing;
    }   
    function setRaing($raing){         

        $this->raing = $raing;        
    }

    function getCover(){
        return $this->cover;
    }   
    function setCover($cover){         

        $this->cover = 'assets/images/'.$cover;              
    }

    function getProducerFK(){
        return $this->producerFK;
    }  

    function setProducerFK($producerFK){         

        $this->producerFK = $producerFK;        
    }

    function getGenderFK(){
        return $this->genderFK;
    }  

    function setGenderFK($genderFK){        

        $this->genderFK = $genderFK;        
    }

   
}
