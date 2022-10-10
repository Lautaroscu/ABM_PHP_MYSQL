<form method="post" action="actualizarchapter" class="my-4">
        <input required type="hidden" name="id" value="{$chapter->id_capitulo}" >
        <label>Titulo de capitulo</label>

        <input required name="title" type="text" value="{$chapter->titulo_cap}"


        <label>Descripcion</label>
        <input required name="description" type="text" value="{$chapter->descripcion}" >


            <label>Numero de capitulo</label>
            <input required type="button" disabled name="num_cap" type="text" value="{$chapter->numero_cap}">

             <input required  disabled value="{$chapter->id_temp_fk}" >
   
             <button type="submit">update</button>
      
    
</form>  