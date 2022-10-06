<div class="aboutchapter">
  {foreach from=$chapters item=$chapter}

    <div class="card">
      <img src="img/imagenoneone.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> {$chapter->numero_cap} {$chapter->titulo_cap}</h5>
        {$chapter->descripcion}
      </div>

      <a type="button" href="season/{$chapter->id_temp_fk}" class="btn btn-primary">Regresar</a>
    </div>
   
  {/foreach}
</div>


<p class="mt-3"><small>Mostrando {$count} capitulo</small></p>
{include   file = "templates/footer.tpl"}