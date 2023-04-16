{extends file="main.tpl"}
{block name=content}

    <h1>Eror {$error['code']}</h1>
    <p>{$error['message']}</p>
{/block}