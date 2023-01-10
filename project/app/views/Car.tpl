{extends file="main.tpl"}
{block name=content}

    <h1>{$car['name']}</h1>
    <a href="{$conf->app_root}/rezerwacja?car={$car["car_id"]}">Rezerwuj</a>

{/block}