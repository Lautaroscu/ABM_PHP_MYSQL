<?php
class userModel {
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe;' . 'charset=utf8', 'root', '');
    }
    function getUserByEmail($email){
        $query = $this->db->prepare("SELECT * FROM users WHERE email = ?");
         $query->execute([$email]) ;
         return $query->fetch(PDO::FETCH_OBJ) ;
        }

}