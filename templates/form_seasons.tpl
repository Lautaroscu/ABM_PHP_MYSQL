
<form method="POST" action="add-season" class="my-4">
<div class="row">
<div class="update">
<label>Titulo de Temporada</label>
<input required name="title"  type="text" >


<label>Descripcion</label>
<textarea required  name="description"  type="text" > </textarea>
</div class="update-container">
<div>
<label>Estreno</label>
<input required   name="premiere"  type="text">

<label>Numero de Temporada</label>
<input required   name="number-season"  type="text">
</div>
</div>
<button class="btn btn-secondary" type="submit">Submit</button>
</form>

{include file='footer.tpl'}
