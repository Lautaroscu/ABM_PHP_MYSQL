<?php
  require_once './libs/smarty/libs/Smarty.class.php';
class AuthHelper {
        private $smarty;
    
        function __construct()
        {
            $this->smarty = new Smarty();
            if(strnatcasecmp(phpversion(), '5.4.0') >= 0){
                if(session_status() == PHP_SESSION_NONE){
                    session_start() ;
                }
    
            }
            else
            {
                if(session_id() == ''){
                    session_start() ;
                }
            }
        }
/**
* Verifica que el user este logueado y si no lo está
* lanza error 403
*/
public function checkLoggedIn() {
   
   if (!isset($_SESSION['IS_LOGGED'])) {
    $this->showError('Inicie sesion para poder ejetucar esta accion') ;
       //header("Location: " . BASE_URL . 'login');
       die();
   }
  
} 
function showError($error = null){
    $this->smarty->assign('error' , $error) ;
    $this->smarty->display('showError.tpl') ;
}
}

