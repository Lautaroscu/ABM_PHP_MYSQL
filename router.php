<?php 
require 'app/controllers/chapter.controller.php' ;
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'series' ;
if(!empty(['action'])){
    $action = 'series' ;
}
$params = explode('/' , $action) ;
$controller = new ChapterController() ;
switch ($params[0]) {
    case 'series':
       $controller->showChapters() ;
        break;
    case 'add' : 
        $controller->addChapter() ;
        break;
    case 'delete' :
        $id = $params[1] ;
        $controller->deleteChapter($id) ;
        break ;
    
    default:
    echo 'error 404 not found' ;
        break;
}

