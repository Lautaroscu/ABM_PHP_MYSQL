<form method="POST" action="updateseason" class="my-4">
<input type="hidden" name="id" value="{$season->id_temp}">
<label>Titulo de Temporada</label>
<input name="title" value="{$season->titulo_temp}"  type="text" >


<label>Descripcion</label>
<input  name="description" value="{$season->descripcion}"  type="text" >


<label>Estreno</label>
<input  name="premiere" value="{$season->fecha_estreno}" type="text">
<button class="btn btn-secondary" type="submit">Submit</button>
</form>