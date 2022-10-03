{include file="templates/header.tpl"}
<section class="seasons">
<div class="brakingbadimg">
    <img src="img/breakingbadimg.png" alt="logo bb">
</div>
<a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  Temporadas 
</a>
<ul class="dropdown-menu">
{foreach from=$seasons item=$season}
  <li><a class="dropdown-item" href="season/{$season->titulo_temp}">Temporada {$season->titulo_temp}</a></li>
{{/foreach}}
</ul>

</div>
</section>
<section class="chapters">  
<div class="row">
           {foreach from=$chapters item=$chapter}
    <div class="card">
            <img src="img/imagenoneone.jpg"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> {$chapter->numero_cap} {$chapter->titulo_cap}</h5>
                <p class="card-text">{$chapter->descripcion|truncate:50}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
    </div>
        {{/foreach}}
</div>
</section>   
{include file="templates/footer.tpl"} 