<?php
require_once './libs/smarty/libs/Smarty.class.php';
require_once 'app/models/season.model.php' ;
 class AuthHelper
{

    protected $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
        if (strnatcasecmp(phpversion(), '5.4.0') >= 0) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        } else {
            if (session_id() == '') {
                session_start();
            }
        }
    }
   
    public function checkLoggedIn() 
    /**
     * Verifica que el user este logueado y si no lo está
     * lanza error 403
     */
    {

        if (!isset($_SESSION['IS_LOGGED'])) {
            $this->showError('Inicie sesion para poder ejetucar esta accion' , null);
        
            die();

        }
    }
    function showError($Forbidden = null,$NotFound = null)
    {
        $this->smarty->assign('Forbidden', $Forbidden);
        $this->smarty->assign('NotFound', $NotFound);

        $this->smarty->display('showError.tpl');
    }
}
