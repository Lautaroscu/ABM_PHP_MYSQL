<?php
require 'app/controllers/controller.php';
require 'app/controllers/auth.Controller.php' ;
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controller = new Controller();
        $controller->showHome();
        break;
    case 'addchapter':
        $controller = new Controller();
        $controller->addChapter();
        break;
    case 'showForm' :
        $controller = new Controller();
        $controller->showForm2();
        break;
    case 'deletechapter':
        $controller = new Controller();
        $id = $params[1];
        if($id)
        $controller->deleteChapter($id);
        else 
        $controller->deleteChapter($params[0]);

        break;
    case 'showupdatechapter':
        $controller = new Controller();
        $id = $params[1];
        if (!empty($id)){
              $controller->showEditChapter($id);
        }
        break;
    case 'actualizarchapter' :
        $controller = new Controller();
         $controller->updateChapter() ;

       
        break ;
    case 'addseason' :
        $controller = new Controller();
        $controller->addSeason() ;
        break;
    case 'deleteseason' :
        $controller = new Controller();
        $controller->deleteSeason($params[1]) ;
        break ;
    case 'showupdateseason' :
        $controller = new Controller();
        $controller->showUpdateSeason($params[1]) ; 
        break;
    case 'updateseason' :
        $controller = new Controller();
        $controller->updateSeason() ; 

    case 'season':
        $controller = new Controller();
        if (!empty($params[1]))
            $controller->showChaptersbySeason($params[1]);
        else
            $controller->showChaptersbySeason($params[0]);
        break;
    case 'aboutchapter':
        $controller = new Controller();
        if (!empty($params[1])) {
            $controller->aboutChapters($params[1]);
        } else
            $controller->aboutChapters($params[0]);
        break;
    case 'login' :
        $authController = new authController() ;
        $authController->showFormLogin() ;
        break ;
    case 'validate' :
        $authController = new authController() ;
        $authController->validateUser() ;
        break ;
    case 'logout' :
        $authController = new authController() ;
        $authController->logout() ;
        break;

    default:
        echo 'error 404 not found';
        break;
}
