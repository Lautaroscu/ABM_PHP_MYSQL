<?php
class SeasonModel
{
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe;' . 'charset=utf8', 'root', '');
    }

    function getAllSeason()
    {
        $query = $this->db->prepare("SELECT * FROM temporadas");
        $query->execute();
        $seasons = $query->fetchAll(PDO::FETCH_OBJ); //devuelve array de objetos
        return $seasons;
    }
    function getSeasonById($id){
        $query = $this->db->prepare("SELECT * FROM temporadas WHERE id_temp = ?") ;
        $query->execute([$id]) ;
        return $query->fetch(PDO::FETCH_OBJ) ;
    }
    function insertSeason($title , $description , $premiere){
        $query = $this->db->prepare("INSERT INTO temporadas(titulo_temp , descripcion , fecha_estreno) VALUES (? , ? , ?)") ;
        $query->execute([$title , $description , $premiere]) ;
      return   $this->db->lastInsertId() ;
    }
    function removeSeason($id){
        $query = $this->db->prepare("DELETE FROM temporadas WHERE id_temp = ?") ;
        $query->execute([$id]) ;
    }
    function updateSeason($title , $description , $premiere , $id){
        $query = $this->db->prepare("UPDATE temporadas SET titulo_temp = ? , descripcion = ? , fecha_estreno = ? WHERE id_temp = ?") ;
        $query->execute([$title , $description , $premiere , $id]) ;
    }

}
