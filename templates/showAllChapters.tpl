        {include file="templates/header.tpl"}
        <section class="seasons">
        <div class=""> 
        <div class="brakingbadimg">
            <img src="img/breakingbadimg.png" alt="logo bb">
        </div>
        <select name="seasons" class="form-control" type="button">
        <option value="1">Temporada 1</option>
        <option value="2">Temporada 2</option>
        <option value="3">Temporada 3</option>
        <option value="4">Temporada 4</option>
        <option value="5">Temporada 5</option>
        </select>
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
                    </div>
            </div>
                {{/foreach}}
        </div>
        <p class="mt-3"><small>Mostrando {$count} capitulos</small></p>
        </section>   
        {include file="templates/footer.tpl"} 
