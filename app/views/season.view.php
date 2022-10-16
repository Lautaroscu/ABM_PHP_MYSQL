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
        $this->smarty->assign('count', count($seasons));
        $this->smarty->assign('seasons', $seasons);
        $this->smarty->display('home.tpl');
    }
    function showUpdateSeason($season){
        $this->smarty->assign('season' , $season) ;
        $this->smarty->display('form_update_season.tpl') ;
    }
    function ConfirmDelete($season)
    {
        $this->smarty->assign("season" , $season);
        $this->smarty->display("confirm.delete.tpl");
    }
}