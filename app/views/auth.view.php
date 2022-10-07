<?php
require_once './libs/smarty/libs/Smarty.class.php';

class authView{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function showFormLogin($error = null){
        $this->smarty->assign("error" , $error) ;
        $this->smarty->display("formLogin.tpl") ;
    }
}