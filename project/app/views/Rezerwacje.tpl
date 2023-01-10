{extends file="main.tpl"}
{block name=content}

    <h1>Moje rezerwacje</h1>

    {foreach $res as $r}
        <div>
            <a href="{$conf->app_root}/rezerwacja/typ/{$r["res_id"]}">
                {$r["car_id"]}
                {$r["city"]}
                {$r["collectDate"]} - {$r["returnDate"]}
            </a>
        </div>
    {/foreach}

{/block}