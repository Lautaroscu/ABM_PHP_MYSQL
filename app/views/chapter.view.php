<?php
class ChapterView{
    function showChapter($chapters){
        include_once('templates/header.php') ;
        include_once('templates/form_alta.php') ;
    ?> 

        <table class="table">
                    <thead>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Numero de capitulo</th>
                    </thead>
                    <?php foreach($chapters as $chapter){?> 
                    <tbody>

                        <tr>
                            <td><b><?php echo $chapter->titulo_cap?></b></td> 
                                <td><?php echo $chapter->descripcion ?></td>
                                <td><?php echo $chapter->numero_cap ?></td>
                        </tr>
                    </tbody>
                    <?php }?>
        </table>
       <?php include_once ('templates/footer.php') ;
    }
}?> ;