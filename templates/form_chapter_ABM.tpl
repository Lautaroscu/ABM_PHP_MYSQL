{include file="templates/header.tpl"}
<form method="POST" action="add" class="my-4">

    <label>Titulo de capitulo</label>
    <input name="title"  type="text" >


    <label>Descripcion</label>
    <input  name="description"  type="text" >


    <label>Numero de capitulo</label>
    <input  name="num_cap"  type="text">


    
     <select name="season">
     {foreach from=$seasons item=$season}
        <option value="{$season->titulo_temp}" >Temporada {$season->titulo_temp}</option>
     {{/foreach}}
     </select>

    
    <button type="submit">Submit</button>
</form>