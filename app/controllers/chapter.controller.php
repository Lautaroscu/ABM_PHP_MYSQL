<?php
require 'app/models/chapter.model.php';
require 'app/views/chapter.view.php';

class ChapterController{
    private $model;
    private $view;
    function __construct(){
        $this->model = new ChapterModel() ;
        $this->view = new ChapterView() ;
    }
    function showChapters(){
        //agarro los datos del modelo
        $chapter = $this->model->getAllChapters() ;
        //y los muestro ingresando a la clase view
        $this->view->showChapter($chapter) ;

    }
    
}