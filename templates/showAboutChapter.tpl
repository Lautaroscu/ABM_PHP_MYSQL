<div class="aboutchapter">
  <div class="card">
    <img src="img/imagenoneone.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> {$chapter->numero_cap} {$chapter->titulo_cap}</h5>
      {$chapter->descripcion}
    </div>

    <a type="button" href="season/{$chapter->id_temp_fk}" class="btn btn-primary">Regresar</a>
  </div>
  {if isset($smarty.session.USER_ID)}
    <div class="actions">
      <ul>
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Acciones
        </a>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="showupdatechapter/{$chapter->id_capitulo}">Editar</a></li>
          <li><a class="dropdown-item" href="deletechapter/{$chapter->id_capitulo}">Borrar</a></li>
        </ul>

      </ul>
    </div>
  {{/if}}

</div>
{include   file = "templates/footer.tpl"}