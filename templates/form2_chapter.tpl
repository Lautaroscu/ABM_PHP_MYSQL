
<form method="POST" action="add" class="my-4">


        <label>Titulo de capitulo</label>

        <input name="title" type="text">


        <label>Descripcion</label>
        <input name="description" type="text" ">


        <label>Numero de capitulo</label>
        <input name="num_cap" type="text" ">


   
        <select name="season">
        {foreach from=$chapters item=$chapter}
            <option value="{$chapter->id_temp_fk}">Temporada{$chapter->id_temp_fk}</option>
            {break}
        {/foreach}
        </select>
    <button class="" type="submit">Submit</button>
</form>