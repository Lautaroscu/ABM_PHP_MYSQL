<?php
    require_once './libs/smarty/libs/Smarty.class.php';
    class ChapterView{
            private $smarty;

            function __construct(){
                $this->smarty = new Smarty();
            }

         function showChapterFilter($chapters){
             $this->smarty->assign('count' , count($chapters)) ;
             $this->smarty->assign('chapters' , $chapters) ;
             $this->smarty->display('templates/showChapters.tpl') ;
         }
    
   
    function showChapterById($chapters){
        $this->smarty->assign('chapters', $chapters); 
        $this->smarty->assign('count', count($chapters));
        $this->smarty->display('templates/showAboutChapter.tpl');
    }
    function showForm($seasons){
        $this->smarty->assign('seasons' , $seasons) ;
        $this->smarty->display('form_chapter_ABM.tpl') ;
    }
    function showHeader($seasons = null){
        $this->smarty->assign('seasons' , $seasons) ;

        $this->smarty->display('header.tpl') ;

    }
}