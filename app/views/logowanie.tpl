{extends file="main.tpl"}
{block name=content}

    <h1>Zaloguj się</h1>
    <form action="{$conf->app_root}/zaloguj" method="post" id="loginForm">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login">
        <label for="pass">Hasło:</label>
        <input type="password" id="pass" name="pass">
        <input type="submit" value="Zaloguj się">
    </form>
    {if $error}
        <p>{$error}</p>
    {/if}

{/block}