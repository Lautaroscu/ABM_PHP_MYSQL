
{if $Forbidden}
    
        <div class="alert alert-danger mt-3">
            {$Forbidden}
        </div>
        <div class="error">
        <div>
            <div>
                <h1>403</h1>
            </div>
            <div>
                <h2>Forbidden</h2>
            </div>
            <div>
                <p>Access to this resource on the server is denied!</p>
            </div>
        </div>

    </div>

{/if}
{if $NotFound}
    <div class="alert alert-danger mt-3">
    {$NotFound}
</div>
<div class="error">
<div>
    <div>
        <h1>404</h1>
    </div>
    <div>
        <h2>Not Found</h2>
    </div>
    <div>
        <p>Not found  file in this server</p>
    </div>
</div>

</div>

    {{/if}}
{include file = "footer.tpl"}