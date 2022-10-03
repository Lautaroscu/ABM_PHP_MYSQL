<?php
require 'app/models/chapter.model.php';
require 'app/views/chapter.view.php';
require 'app/models/season.model.php' ;
require 'app/views/season.view.php' ;

class ChapterController{
    private $chapter_model;
    private $chapter_view;
    private $season_model;
    private $season_view;
    function __construct(){
        $this->chapter_model = new ChapterModel() ;
        $this->chapter_view = new ChapterView() ;
        $this->season_model = new SeasonModel() ;
        $this->season_view = new SeasonView() ;
    }
    function showAllChapters(){
         //agarro los datos del modelo
         $chapters = $this->chapter_model->getAllChapters() ;
         $seasons = $this->season_model->getAllTemp() ;
         //y los muestro ingresando a la clase view
         $this->chapter_view->showAllChapter($chapters, $seasons) ;
}
  
function showTemp($id = null){
    $temp = $this->season_model->getTempAllCap($id);
    $allTemp = $this->season_model->getAllTemp();
    $this->season_view->showTemp($temp,$allTemp)  ;

}
    function aboutChapters($id_cap = null){
      $chapter = $this->chapter_model->aboutChaptersById($id_cap) ;
      $this->chapter_view->showChapterById($chapter) ;
    }
    
}