
<div class="aboutchapter">
  <div class="card">
    <img src="{$chapter->img}" class="card-img-top" alt="...">
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
          <li><a class="dropdown-item" href="show-update-chapter/{$chapter->id_capitulo}  ">Editar</a></li>
          <li><a class="dropdown-item" href="delete-chapter/{$chapter->id_capitulo}">Borrar</a></li>
        </ul>

      </ul>
    </div>
  {{/if}}

</div>
{include   file = "templates/footer.tpl"}