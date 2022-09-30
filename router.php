<?php 
require 'app/controllers/chapter.controller.php' ;
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'serie' ;
if(!empty(['action'])){
    $action = 'serie' ;
}
$params = explode('/' , $action) ;
$controller = new ChapterController() ;
switch ($params[0]) {
    case 'serie':
       $controller->showAllChapters() ;
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

