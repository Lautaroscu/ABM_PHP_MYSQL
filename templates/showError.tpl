{include file = "header.tpl"}
{if $error}
    
        <div class="alert alert-danger mt-3">
            {$error}
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
{include file = "footer.tpl"}