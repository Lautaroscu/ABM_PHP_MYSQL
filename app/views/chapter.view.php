    <?php
    require('libs/smarty/libs/Smarty.class.php') ;
    class ChapterView{
            private $smarty;
            function __constructor(){
                $this->smarty = new Smarty() ;
            }
         function showAllChapter($chapters){
             $smarty = new Smarty() ;
             $smarty->assign('count' , count($chapters)) ;
             $smarty->assign('chapters' , $chapters) ;
             $smarty->display('templates/showAllChapters.tpl') ;
         }
    // function showChapterBySeason($filters){
    //     $smarty = new Smarty() ;
    //     $smarty->assign('count' , count($filters)) ;
    //     $smarty->assign('filters' , $filters) ;
    //     // $smarty->assign('count' , count($chapters)) ;
    //     // $smarty->assign('chapters' , $chapters) ;

    //     $smarty->display('templates/showChaptersbySeasons.tpl') ;

    // } 
}