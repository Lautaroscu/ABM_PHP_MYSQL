<?php
require_once './libs/smarty/libs/Smarty.class.php';
class SeasonView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function showSeason($seasons)
    {
        // $this->smarty->assign ('count',count($chapters));
        $this->smarty->assign('count', count($seasons));
        $this->smarty->assign('seasons', $seasons);
        $this->smarty->display('home.tpl');
    }

    // function showAllTemp($seasons, $seasonFilter){
    //     $this->smarty->assign('seasons', $seasons);
    //     $this->smarty->display('home.tpl');



    // }


}
