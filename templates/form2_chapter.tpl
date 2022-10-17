
<form action="add-chapter" method="POST" class="my-4" enctype="multipart/form-data">
{foreach from=$chapters item=$chapter}
<input type="hidden" name="id" value="{$chapter->id_capitulo}"> 
{{/foreach}}
<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Título</label>
            <input required name="title" type="text" class="form-control">
        </div>
        <label>Numero de Capitulo</label>

        <input required type="text" name="numero_cap" class="form-control" >

    </div>

    <div class="col-3 " >
        <div class="form-group pb-4">
          <input  class="form-control mt-4" type="file" name="image">
        </div>
        <select required name="season">
          {foreach from=$seasons item=$season}
        <option selected value="{$season->id_temp}"> {$season->titulo_temp}</option>
        
      {/foreach}
        </select>
      
 
     </div>
</div>

<div class="form-group">
    <label>Descripcion</label>
    <textarea required name="description" class="form-control" rows="3"></textarea>
</div>

<button type="submit" class="btn btn-primary mt-2">Guardar</button>


</form>
{include file='footer.tpl'}
