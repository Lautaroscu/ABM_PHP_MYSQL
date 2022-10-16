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
               $this->smarty->assign('chapter', $chapter);
              $this->smarty->display('form_chapter_ABM.tpl');
           
    }
    function showForm2($chapters , $seasons)
    {
        $this->smarty->assign('chapters', $chapters);
        $this->smarty->assign('seasons', $seasons);


        $this->smarty->display('form2_chapter.tpl');
    }

    function showHeader($seasons = null , $season = null)
    {
        $this->smarty->assign('seasons', $seasons);
        $this->smarty->assign('season', $season);


        $this->smarty->display('header.tpl');
    }

}
