<?php
        class ChapterModel{
           private $db;

            function __construct(){
                $this->db = new PDO('mysql:host=localhost;'. 'dbname=tpe;' . 'charset=utf8'  , 'root' , '') ;
            }

        function getAllChapters(){
            $query =$this->db->prepare("SELECT * FROM capitulos") ;
            $query->execute();
            $chapters = $query->fetchAll(PDO::FETCH_OBJ) ; //devuelve array de objetos
            return $chapters ;
        }
       function getTempAllCap($temp){
        $query = $this->db->prepare("SELECT *, temporadas.id_temp FROM `capitulos` JOIN temporadas ON id_temp_fk = temporadas.id_temp 
        WHERE titulo_temp = ?");
        $query->execute(array($temp));;
        $chapters = $query->fetchAll(PDO::FETCH_OBJ) ; //devuelve array de objetos
        return $chapters ;
       }
       function getAllTemp(){
        $query =$this->db->prepare("SELECT * FROM temporadas") ;
        $query->execute();
        $chapters = $query->fetchAll(PDO::FETCH_OBJ) ; //devuelve array de objetos
        return $chapters ;
       }
    }

        

