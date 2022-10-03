<?php 
class SeasonModel{
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'. 'dbname=tpe;' . 'charset=utf8'  , 'root' , '') ;
    }
    function getTempAllCap($temp){
        $query = $this->db->prepare("SELECT * FROM `capitulos` JOIN temporadas ON capitulos.id_temp_fk = temporadas.id_temp 
        WHERE titulo_temp = ?");
        $query->execute([$temp]);;
        $chapters = $query->fetchAll(PDO::FETCH_OBJ) ; //devuelve array de objetos
        return $chapters ;
       }
       function getAllTemp(){
        $query =$this->db->prepare("SELECT * FROM temporadas") ;
        $query->execute();
        $seasons = $query->fetchAll(PDO::FETCH_OBJ) ; //devuelve array de objetos
        return $seasons ;
       }
}