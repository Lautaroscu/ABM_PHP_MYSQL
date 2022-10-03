<?php
    require_once './libs/smarty/libs/Smarty.class.php';
    class ChapterView{
            private $smarty;

            function __construct(){
                $this->smarty = new Smarty();
            }

         function showAllChapter($chapters, $seasons){
             $smarty = new Smarty() ;
             $smarty->assign('count' , count($chapters)) ;
             $smarty->assign('chapters' , $chapters) ;
             $smarty->assign('seasons' , $seasons) ;
             $smarty->display('templates/showAllChapters.tpl') ;
         }
    
   
    function showChapterById($chapters){
        $smarty = new Smarty() ;
        $smarty->assign('chapters', $chapters); 
        $smarty->assign('count', count($chapters));
        $smarty->display('templates/showAboutChapter.tpl');
    }
}