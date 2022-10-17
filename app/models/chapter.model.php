<?php
class ChapterModel
{
    //modelo de datos de la tabla "capitulos"

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe;' . 'charset=utf8', 'root', '');
    }
    function getAllChapters()
    {
            //toma toda la tabla capitulos

        $query = $this->db->prepare("SELECT * FROM capitulos");
        $query->execute();
        $chapters = $query->fetchAll(PDO::FETCH_OBJ); //devuelve array de objetos
        return $chapters;
    }
    function getChaptersBySeason($season)
    {
            //devuelve los capitulos "filtrados" dependiendo de su temporada (clave foranea)

        $query = $this->db->prepare("SELECT * FROM capitulos   WHERE id_temp_fk = ?");
        $query->execute([$season]);
        $chapters = $query->fetchAll(PDO::FETCH_OBJ); //devuelve array de objetos
        return $chapters;
    }
    function aboutChaptersById($id)
    {
            //devuelve un unico capitulo dependiendo su id

        $query = $this->db->prepare("SELECT * FROM capitulos WHERE id_capitulo = ?
          ");
        $query->execute([$id]);
        $chapter = $query->fetch(PDO::FETCH_OBJ);
        return $chapter;
    }
    function insertChapter($title, $description, $numero_cap, $season, $image = null)
    {
            //inserta en la db un conjunto de arreglos tipo "$_POST"

        $pathImg = null;
        if ($image){
            var_dump($image) ;
             $pathImg = $this->uploadImage($image);
             $query = $this->db->prepare("INSERT INTO capitulos(titulo_cap , descripcion , numero_cap , id_temp_fk , img) VALUES (? , ? , ? , ? , ?)");
        $query->execute([$title, $description, $numero_cap, $season, $pathImg]);
        return $this->db->lastInsertId();
        }
        else{
            $query = $this->db->prepare("INSERT INTO capitulos(titulo_cap , descripcion , numero_cap , id_temp_fk) VALUES (? , ? , ? , ? )");
            $query->execute([$title, $description, $numero_cap, $season]);
            return $this->db->lastInsertId();
            }
        }
        
    
    private function uploadImage($image)
    {
        $target = 'imagen_db/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }
    function updateChapter($titulo_cap, $descripcion, $img = null, $id)
    {
        if ($img){
            $pathImg = $this->uploadImage($img);
        $query = $this->db->prepare("UPDATE capitulos SET titulo_cap = ?   , descripcion = ? , img = ?  WHERE   id_capitulo = ?");
        $query->execute(array($titulo_cap, $descripcion, $pathImg, $id));
    }
   
        }
            
    function deleteChapter($id)
    {
        $query = $this->db->prepare("DELETE FROM capitulos WHERE id_capitulo = ?");
        $query->execute([$id]);
    }
}

