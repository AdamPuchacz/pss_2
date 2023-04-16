{extends file="main.tpl"}
{block name=content}

    <h1>Katalog</h1>

    <div class="filtr">
        <p>Typ samochodu : </p>
        <form action="{$conf->app_root}/katalog" method="GET" >
            {foreach $car_types as $type}
                <label>
                    <input type="radio" name="type" value="{$type['type_name']}" />
                    {$type['type_name']}
                </label>
            {/foreach}
            <input type="submit" value="Szukaj" />
        </form>
    </div>

    {foreach $cars as $car}
        
            <a class="catalog_tile" href="{$conf->app_root}/car/{$car["car_id"]}">
                <div class="car_name">{$car["name"]}</div>
                 <img class="catalog_car_image" src="{$conf->app_root}/assets/{$car['image']}.jpg" alt="{$car['name']}">
            </a>
    {/foreach}

    <div>
        {if $current_page > 1}
        <a href="{$conf->app_root}/katalog?page={$previous_page}">&#60;Poprzednia strona</a>
        {/if}
        </a> Strona {$current_page} z {$total_no_of_pages}
        {if $current_page <= $total_no_of_pages - 1}
        <a href="{$conf->app_root}/katalog?page={$next_page}">Nastepna strona &#62;</a>
        {/if}
    </div>

{/block}