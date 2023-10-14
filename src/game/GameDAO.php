<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/core/DataBase.php';
require_once 'Game.php';

class GameDAO extends DataBase{

    function __construct(){
        parent::__construct();
        $this->conn = $this->conn();
    }

    function show($parameter=null){        
        $dataList = array();

        if(!is_null($parameter)){
            $resulset = $this->retrieve('games', array('id'), array($parameter)); 

        }else{
            $resulset = $this->retrieve('games');         
        }

        if (is_null($resulset)) return $dataList;        

        foreach($resulset as $row){                           
            array_push($dataList, new Game($row['id'], $row['name'], 
            $row['description'], $row['raing'], $row['cover'], 
            $row['producer_fk'], $row['gender_fk']));       
        }

        return $dataList;

    }

    function showJoin($keyword, $order){
        $dataList = array();

        $query = "SELECT games.id, name, genders.gender, producers.producer, description, raing, cover FROM games JOIN genders  ON games.gender_fk = genders.id JOIN producers ON games.producer_fk = producers.id ";

        if(!empty($keyword)){
            $query .= "WHERE games.name LIKE '%$keyword%' OR producers.producer LIKE '%$keyword%' OR genders.gender LIKE '%$keyword%' ";
        }

        switch($order){
            case "producer":
                $query .= "ORDER BY producers.producer";
                break;
            case "high-rating": 
                $query .= "ORDER BY games.raing DESC"; 
                break; 
            case "low-rating":
                $query .= "ORDER BY games.raing ASC";  
                break;
            default:
                $query .= "ORDER BY games.name";
                break;
        }

        $statement = $this->conn->prepare($query);
        $statement->execute();            
        $resulset = $statement->get_result();                  

        if (is_null($resulset)) return $dataList;          
        
        foreach($resulset as $row){                                                  
            array_push($dataList, new Game($row['id'], $row['name'], 
            $row['description'], $row['raing'], $row['cover'], 
            $row['producer'], $row['gender']));       
        }

        return $dataList;     

        
    }

    function showJoinByColumn($parameter=null){
        $dataList = array();

        if(empty($parameter)) return $dataList;

        $query = "SELECT games.id, name, genders.gender, producers.producer, description, raing, cover FROM games JOIN genders  ON games.gender_fk = genders.id JOIN producers ON games.producer_fk = producers.id WHERE games.id = $parameter"; 

        $statement = $this->conn->prepare($query);
        $statement->execute();            
        $resulset = $statement->get_result();                  

        if (is_null($resulset)) return $dataList;          
        
        foreach($resulset as $row){                                                  
            array_push($dataList, new Game($row['id'], $row['name'], 
            $row['description'], $row['raing'], $row['cover'], 
            $row['producer'], $row['gender']));       
        }

        return $dataList;     

        
    }
    


}