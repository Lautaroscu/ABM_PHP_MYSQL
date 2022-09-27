<?php
class ChapterView{
    function showChapter($chapters){
        include_once('templates/header.php') ;
        include_once('templates/form_alta.php') ;
        echo '<ul class=list-group>' ;
        foreach($chapters as $chapter){
            echo "<li class=list-group-item d-flex justify-content-between align-items-center>
            <span>$chapter->titulo </span> 
        </li>" ;
        }

        echo '</ul>' ;
        include_once ('templates/footer.php') ;

    }
}