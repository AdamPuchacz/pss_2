{extends file="main.tpl"}
{block name=content}

    <h1>Katalog</h1>

    {foreach $cars as $car}
        <div>
            <a href="{$conf->app_root}/car/{$car["car_id"]}">
                {$car["name"]}
            </a>
        </div>
    {/foreach}

{/block}