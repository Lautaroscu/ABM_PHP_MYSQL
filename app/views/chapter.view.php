<?php
require_once './libs/smarty/libs/Smarty.class.php';
class ChapterView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
       
    }

    function showChapterFilter($chapters)
    {
        $this->smarty->assign('count', count($chapters));
        $this->smarty->assign('chapters', $chapters);
        $this->smarty->display('showChapters.tpl');
    }


    function showChapterById($chapter)
    {
        $this->smarty->assign('chapter', $chapter);
        $this->smarty->display('showAboutChapter.tpl');
    }
    function showFormUpdate($chapter)
    {
        $action = 'actualizarchapter';
               $this->smarty->assign('chapter', $chapter);
                $this->smarty->assign('action', $action) ;
              $this->smarty->display('form_chapter_ABM.tpl');
              var_dump($action);
    }
    function showForm2($chapters)
    {
        $this->smarty->assign('chapters', $chapters);

        $this->smarty->display('form2_chapter.tpl');
    }

    function showHeader($seasons = null)
    {
        $this->smarty->assign('seasons', $seasons);

        $this->smarty->display('header.tpl');
    }

}
