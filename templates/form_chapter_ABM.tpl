<form method="post" action="update" class="my-4">
    {foreach from=$chapters item=$chapter}
        <label>Titulo de capitulo</label>

        <input name="title" type="text" value="{$chapter->titulo_cap}">


        <label>Descripcion</label>
        <input name="description" type="text" value="{$chapter->descripcion}">


        <label>Numero de capitulo</label>
        <input name="num_cap" type="text" value="{$chapter->numero_cap}">



        <select name="season">
            <option value="{$chapter->id_temp_fk}">Temporada {$chapter->id_temp_fk}</option>
        </select>
    {{/foreach}}
    <button class="" type="submit">Submit</button>
</form>