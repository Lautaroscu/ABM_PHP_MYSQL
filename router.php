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
    case 'add':
        $controller->addChapter();
        break;
    case 'delete':
        $controller = new Controller();
        $id = $params[1];
        if($id)
        $controller->deleteChapter($id);
        else 
        $controller->deleteChapter($params[0]);

        break;
    case 'showUpdate':
        $controller = new Controller();

        $id = $params[1];
        if (!empty($id))
            $controller->editChapter($id);
        break;
    case 'update' :
        $controller = new Controller();

        $controller->updateChapter() ;
        break ;
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
