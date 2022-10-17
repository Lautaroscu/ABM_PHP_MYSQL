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
    case 'add-chapter':
        $controller = new Controller();
        $controller->addChapter();
        break;
    case 'show-form' :
        $controller = new Controller();
        $controller->showForm2();
        break;
    case 'delete-chapter':
        $controller = new Controller();
        $id = $params[1];
        if($id)
        $controller->deleteChapter($id);
        else 
        $controller->deleteChapter($params[0]);

        break;
    case 'show-update-chapter':
        $controller = new Controller();
        $id = $params[1];
        if (!empty($id)){
              $controller->showEditChapter($id);
        }
        break;
    case 'update-chapter' :
        $controller = new Controller();
         $controller->updateChapter() ;

       
        break ;
    case 'add-season' :
        $controller = new Controller();
        $controller->addSeason() ;
        break;
    case 'confirm-delete' :
        $controller = new Controller();
        $controller->ConfirmDelete($params[1]) ;
        break ;
    case 'delete-season':
        $controller = new Controller();
        $controller->deleteSeason($params[1]) ;
        break ;
    case 'show-update-season' :
        $controller = new Controller();
        $controller->showUpdateSeason($params[1]) ; 
        break;
    case 'update-season' :
        $controller = new Controller();
        $controller->updateSeason() ; 
        break;

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
        $controller = new Controller() ;
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
    header('HTTP/1.0 404 Not Found', true, 404);
    $controller = new Controller();

      $controller->showError() ;
        
        break;
}
