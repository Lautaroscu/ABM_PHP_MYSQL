{include file="templates/header.tpl"}
<section class="seasons">
<div class=""> 
<div class="brakingbadimg">
    <img src="img/breakingbadimg.png" alt="logo bb">
</div>
<select name="seasons" class="form-control" type="button">
{foreach from=$allseason item=$season}
<option value="{$season->titulo_temp}">{$season->titulo_temp}</option>

{{/foreach}}
</div>
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
</section>   
{include file="templates/footer.tpl"} 
