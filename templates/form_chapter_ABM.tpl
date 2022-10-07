{foreach from=$chapters item=$chapter}
<form method="post" action="update" class="my-4">
   
        <input type="hidden" name="id" value="{$chapter->id_capitulo}" >
        <label>Titulo de capitulo</label>

        <input name="title" type="text" value="{$chapter->titulo_cap}">


        <label>Descripcion</label>
        <input name="description" type="text" value="{$chapter->descripcion}">


            <label>Numero de capitulo</label>
            <input type="button" disabled name="num_cap" type="text" value="{$chapter->numero_cap}">

             <input  disabled value="Temporada {$chapter->id_temp_fk}" >
    
             <button type="submit">update</button>
</form>
{{/foreach}}