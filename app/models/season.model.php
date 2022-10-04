<?php 
class SeasonModel{
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'. 'dbname=tpe;' . 'charset=utf8'  , 'root' , '') ;
    }
     
       function getAllSeason(){
        $query =$this->db->prepare("SELECT * FROM temporadas") ;
        $query->execute();
        $seasons = $query->fetchAll(PDO::FETCH_OBJ) ; //devuelve array de objetos
        return $seasons ;
       }
}