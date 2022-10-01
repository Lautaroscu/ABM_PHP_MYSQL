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
             $smarty->display('templates/showTemp.tpl') ;
         }
    // function showChapterBySeason($filters){
    //     $smarty = new Smarty() ;
    //     $smarty->assign('count' , count($filters)) ;
    //     $smarty->assign('filters' , $filters) ;
    //     // $smarty->assign('count' , count($chapters)) ;
    //     // $smarty->assign('chapters' , $chapters) ;

    //     $smarty->display('templates/showChaptersbySeasons.tpl') ;

    // } 
    function showTemp($temp,$allTemp ){
        $smarty = new Smarty() ;
        $smarty->assign('tempCap', $temp);
        $smarty->assign ('allTemp',$allTemp);
    

        $smarty->display('templates/showTemp.tpl');

    }
}