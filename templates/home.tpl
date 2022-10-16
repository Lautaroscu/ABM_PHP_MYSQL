    <section class="seasons">
       <div class="brakingbadimg">
          <img src="img/breakingbadimg.png" alt="logo bb">
       </div>
       <div class="seasonDescrip">
          <h2>Breaking Bad</h2>
          <p> <span>2008| 16+ | 5 temporadas | Thrillers de TV</span> </p>
          <p> Un profesor de Química de secundaria con cáncer terminal se asocia a un exestudiante para asegurar el
             futuro de su familia al fabricar y vender metanfetamina.</p>
          <p> <span>Protagonistas:</span> Bryan Cranston,Aaron Paul,Anna Gunn </p>
          <p> <span>Creado por:</span> Vince Gilligan </p>
          <div>
          {if isset($smarty.session.USER_ID)}
             {include file = 'form_seasons.tpl'}
            {{/if}}
             <table class="table table-dark ">
                <thead>
                   <th>Temporadas</th>
                   <th>Descripcion</th>
                   <th>Fecha de Estreno</th>
                   <th>Numero de Temporada</th>
                   {if isset($smarty.session.USER_ID)}
                   <th>Acciones</th>
                   {{/if}}
                </thead>

                <tbody>
                   {foreach from=$seasons item=$season}
                      <tr>
                         <td>{$season->titulo_temp}</td>
                         <td>{$season->descripcion}</td>
                         <td>{$season->fecha_estreno}</td>
                         <td>{$season->numero_temp}</td>

                         {if isset($smarty.session.USER_ID)}
                         <td>
                         

                            <a href="confirm-delete/{$season->id_temp}" type='button' class='btn btn-danger  '>BORRAR</a>
                            <a href="show-update-season/{$season->id_temp}" type='button' class="btn btn-primary  ">EDITAR</a>                 
                         </td>
                        {{/if}}
                      </tr>
                   {{/foreach}}
                </tbody>

             </table>
          </div>
       </div>
    </section>

{include file="footer.tpl"}