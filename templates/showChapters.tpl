<section class="chapters">  

<div class="row">
           {foreach from=$chapters item=$chapter}
    <div class="card">
            <img src="img/imagenoneone.jpg"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> {$chapter->numero_cap} {$chapter->titulo_cap}</h5>
                <p class="card-text">{$chapter->descripcion|truncate:50}</p>
                <a href="aboutchapter/{$chapter->id_capitulo}" class="btn btn-primary">Ver mas</a>
                <div class="actions">
      <ul>
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Acciones
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="update/{$chapter->id_capitulo}">Editar</a></li>
          <li><a class="dropdown-item" href="delete/{$chapter->id_capitulo}">Borrar</a></li>
        </ul>

      </ul>
    </div>
            </div>
    </div>
        {{/foreach}}
</div>
</section>   
<p class="mt-3"><small>Mostrando {$count} capitulos</small></p>
{include file="templates/footer.tpl"} 
