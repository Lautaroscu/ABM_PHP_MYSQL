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


    function showChapterById($chapters)
    {
        $this->smarty->assign('chapters', $chapters);
        $this->smarty->assign('count', count($chapters));
        $this->smarty->display('showAboutChapter.tpl');
    }
    function showFormUpdate($chapters)
    {
        //var_dump($chapters) ;
        $this->smarty->assign('chapters', $chapters);
        $this->smarty->display('form_chapter_ABM.tpl');
    }
    function showForm2($chapters)
    {
        //var_dump($chapters) ;
        $this->smarty->assign('chapters', $chapters);
        $this->smarty->display('form2_chapter.tpl');
    }

    function showHeader($seasons = null)
    {
        $this->smarty->assign('seasons', $seasons);

        $this->smarty->display('header.tpl');
    }
}
