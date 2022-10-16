{include file="header.tpl"}

<form action="update-chapter" method="POST" class="my-4" enctype="multipart/form-data">
<input type="hidden" name="id" value="{$chapter->id_capitulo}">
<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Título</label>
            <input required name="title" type="text" value="{$chapter->titulo_cap}" class="form-control">
        </div>
        <label>Numero de Capitulo</label>

        <input required type="text" name="numero_cap" value="{$chapter->numero_cap}" class="form-control" >

    </div>

    <div class="col-3 " >
        <div class="form-group pb-4">
          <input  class="form-control mt-4" type="file" name="image" value="{$chapter->img}">
        </div>
        <select required name="season">
       
        <option value="{$chapter->id_temp_fk}">Temporada {$chapter->id_temp_fk}</option>

        </select>
      
 
     </div>
</div>

<div class="form-group">
    <label>Descripcion</label>
    <textarea required name="description" class="form-control" rows="3" value="{$chapter->descripcion}"> {$chapter->descripcion}</textarea>
</div>

<button type="submit" class="btn btn-primary mt-2">update</button>


</form>
{include file='footer.tpl'}

