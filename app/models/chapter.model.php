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
            $query = $this->db->prepare("SELECT * FROM `capitulos` WHERE id_temp_fk = ?") ;
            $query->execute([$temp]);
            $chapters = $query->fetchAll(PDO::FETCH_OBJ) ; //devuelve array de objetos
            return $chapters ;
           }
       
       function aboutChaptersById($titulo){
         $query = $this->db->prepare('SELECT * FROM capitulos WHERE id_capitulo = ?
          ') ;
         $query->execute([$titulo]) ;
         $chapter = $query->fetchAll(PDO::FETCH_OBJ) ;
         return $chapter ;
       }
    }

        

