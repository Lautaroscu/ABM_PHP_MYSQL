<?php
//modelo de datos de la tabla "capitulos"
class ChapterModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe;' . 'charset=utf8', 'root', '');
    }
    //toma toda la tabla capitulos
    function getAllChapters()
    {
        $query = $this->db->prepare("SELECT * FROM capitulos");
        $query->execute();
        $chapters = $query->fetchAll(PDO::FETCH_OBJ); //devuelve array de objetos
        return $chapters;
    }
    //devuelve los capitulos "filtrados" dependiendo de su temporada (clave foranea)
    function getChaptersBySeason($season)
    {
        $query = $this->db->prepare("SELECT * FROM `capitulos` WHERE id_temp_fk = ?");
        $query->execute([$season]);
        $chapters = $query->fetchAll(PDO::FETCH_OBJ); //devuelve array de objetos
        return $chapters;
    }
    //devuelve un unico capitulo dependiendo su id
    function aboutChaptersById($id)
    {
        $query = $this->db->prepare("SELECT * FROM capitulos WHERE id_capitulo = ?
          ");
        $query->execute([$id]);
        $chapter = $query->fetchAll(PDO::FETCH_OBJ);
        return $chapter;
    }
    //inserta en la db un conjunto de arreglos tipo "$_POST"
    function insertChapter($title, $description, $num_cap, $season)
    {
        $query = $this->db->prepare("INSERT INTO capitulos(titulo_cap , descripcion , numero_cap , id_temp_fk) VALUES (? , ? , ? , ? )");
        $query->execute([$title, $description, $num_cap, $season]);
        return $this->db->lastInsertId();
    }
    function updateChapter($id, $titulo_cap , $descripcion)
    {
        $query = $this->db->prepare("UPDATE capitulos SET titulo_cap = ?  , descripcion = ? WHERE id_capitulo = ?");
        $query->execute(array( $titulo_cap , $descripcion , $id));
        
    }
    function deleteChapter($id)
    {
        $query = $this->db->prepare("DELETE FROM capitulos WHERE id_capitulo = ?");
        $query->execute([$id]);
    }
}
