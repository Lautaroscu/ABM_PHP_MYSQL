<?php
    require_once './libs/smarty/libs/Smarty.class.php';
    class ChapterView{
            private $smarty;

            function __construct(){
                $this->smarty = new Smarty();
            }

         function showAllChapter($chapters){
             $smarty = new Smarty() ;
             $smarty->assign('count' , count($chapters)) ;
             $smarty->assign('chapters' , $chapters) ;
             $smarty->display('templates/showAllChapters.tpl') ;
         }
  
        function showTemp($chapters,$allseason){
            $smarty = new Smarty() ;
            $smarty->assign('tempCap', $chapters);
            $smarty->assign ('allTemp',$allseason);
            $smarty->display('templates/showTemp.tpl');

        }
}