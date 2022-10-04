
<section class="chapters">  
<div class="row">
           {foreach from=$chapters item=$chapter}
    <div class="card">
            <img src="img/imagenoneone.jpg"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> {$chapter->numero_cap} {$chapter->titulo_cap}</h5>
                <p class="card-text">{$chapter->descripcion|truncate:50}</p>
                <a href="aboutChapter/{$chapter->id_capitulo}" class="btn btn-primary">Ver mas</a>
            </div>
    </div>
        {{/foreach}}
</div>

</section>   
<p class="mt-3"><small>Mostrando {$count} capitulos</small></p>
{include file="templates/footer.tpl"} 
