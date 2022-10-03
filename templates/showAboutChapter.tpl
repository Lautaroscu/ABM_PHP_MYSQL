{include file="templates/header.tpl"}
{foreach from=$chapters item=$chapter}
    
<div class="card">
            <img src="img/imagenoneone.jpg"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> {$chapter->numero_cap} {$chapter->titulo_cap}</h5>
                {$chapter->descripcion}
            </div>
           
    </div>
      
  
{/foreach}

    <p class="mt-3"><small>Mostrando {$count} capitulos</small></p>
    {include   file = "templates/footer.tpl"}
