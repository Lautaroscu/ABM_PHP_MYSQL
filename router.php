<?php 
require 'app/controllers/chapter.controller.php' ;
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


$params = explode('/', $action);
$controller = new ChapterController() ;
switch ($params[0]) {
    case 'home':
       $controller->showAllChapters() ;
        break;
    case 'add' : 
        $controller->addChapter() ;
        break;
    case 'delete' :
        $id = $params[1] ;
        $controller->deleteChapter($id) ;
        break ;
    case 'season':
        if(!empty($params[1]))
        $controller->showTemp($params[1]);
        else{
             $controller->showTemp($params[0]) ;
        }
    break;
    case 'aboutChapter' :
        if(!empty($params[1])){
             $controller->aboutChapters($params[1]) ;
        }
        break ;
       
    default:
    echo 'error 404 not found' ;
        break;
}


